<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class Page extends \PhpTheme\Core\Widget
{

    public $title;

    public $text;

    public function toString() : string
    {
        return $this->render('page', [
            'title' => $this->title,
            'text' => $this->text
        ]);
    }

}