<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

class MainMenuItem extends \PhpTheme\Bootstrap4\MenuItem
{

    const MENU = MainMenu2::class;

    public function toString() : string
    {
        if ($this->active)
        {
            $this->linkTag = 'span';
        }

        if (count($this->items) > 0)
        {
            $this->url = '#';

            $this->linkTag = 'a';

            $this->linkAttributes = HtmlHelper::mergeAttributes($this->linkAttributes, [
                'class' => ['dropdown-toggle'],
                'data-toggle' => 'dropdown',
                'aria-haspopup' => "true",
                'aria-expanded' => "false"
            ]);
        }

        return parent::toString();
    }

}