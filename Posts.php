<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class Posts extends \PhpTheme\Core\Widget
{

    public $items;

    public function toString() : string
    {
        return $this->render('posts', [
            'items' => $this->items
        ]);
    }

}