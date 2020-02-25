<?php

namespace PhpTheme\Themes\Bootstrap4;

class SocialMenu extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = SocialMenuItem::class;

    public $tag = 'div';

    public $attributes = ['class' => 'row mb-2'];

    public $label;

}