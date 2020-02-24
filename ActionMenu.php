<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class ActionMenu extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = ActionMenuItem::class;

    public $tag = 'ul';

    public $attributes = [
        'class' => ['nav', 'nav-pills', 'justify-content-end'],
        'style' => ['float' => 'right']
    ];

}