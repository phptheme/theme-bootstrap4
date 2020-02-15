<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class GridCellButton extends GridCellLink
{

    public $template = '<i class="{icon}"></i>';

    public $icon = 'fa fa-circle';

    protected function renderLink(array $params = [], array $linkAttributes = []) : string
    {
        $params['{icon}'] = $this->icon;

        return parent::renderLink($params, $linkAttributes);
    }

}