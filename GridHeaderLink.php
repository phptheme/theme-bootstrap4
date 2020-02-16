<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class GridHeaderLink extends \PhpTheme\Bootstrap4\GridHeader
{

    const GRID_CELL = GridCellLink::class;

    public $defaultAttributes = ['style' => ['width' => '1%', 'white-space' => 'nowrap']];

    public $defaultCellAttributes = ['style' => ['width' => '1%', 'white-space' => 'nowrap']];

}