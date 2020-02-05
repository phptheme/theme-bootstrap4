<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class MainMenu extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = MainMenuItem::class;

    public $itemOptions = [
        'linkAttributes' => [
            'class' => 'p-2 text-dark'
        ],
        'tag' => false
    ];

    public $tag = 'nav';

    public $attributes = [
        'class' => 'my-2 my-md-0 mr-md-3'
    ];
    
}