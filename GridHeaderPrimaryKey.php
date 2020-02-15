<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class GridHeaderPrimaryKey extends GridHeaderNumber
{

    public $defaultAttributes = [
        'class' => ['d-none', 'd-sm-table-cell'],
        'style' => ['width' => '1%', 'white-space' => 'nowrap', 'text-align' => 'right']
    ];

    public $defaultCellAttributes = [
        'class' => ['d-none', 'd-sm-table-cell'],
        'style' => ['text-align' => 'right', 'width' => '1%', 'white-space' => 'nowrap']
    ];

}