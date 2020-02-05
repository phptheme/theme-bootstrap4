<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class FooterMenu extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = FooterMenuItem::class;

    public $tag = 'div';

    public $attributes = ['class' => 'row mb-2'];

    public $label;

    public function toString() : string
    {
        $return = parent::toString();

        if ($return && $this->label)
        {
            $return = '<h5>' . $this->label . '</h5>' . PHP_EOL . $return;
        }

        return $return;
    }

}