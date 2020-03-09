<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class Layout extends \PhpTheme\Core\Widget
{

    public $title;

    public $backgroundImage;

    public function toString() : string
    {
        return $this->render('layout', [
            'content' => $this->content,
            'title' => $this->title,
            'backgroundImage' => $this->backgroundImage
        ]);
    }

}