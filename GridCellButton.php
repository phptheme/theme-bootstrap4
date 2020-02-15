<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class GridCellButton extends GridCellLink
{

    public $icon = 'fa fa-circle';

    protected function renderLink(array $options = []) : string
    {
        $options['label'] = null;

        $options['icon'] = $this->icon;

        $options['attributes']['title'] = $this->getLabel(); 

        return parent::renderLink($options);
    }

}