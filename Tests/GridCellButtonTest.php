<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Themes\Bootstrap4\Tests;

use PhpTheme\Themes\Bootstrap4\GridCellButton;
use PhpTheme\Grid\Grid;

class GridCellButtonTest extends \PHPUnit\Framework\TestCase
{

    public function testIndex()
    {
        $grid = new Grid;

        $cell = new GridCellButton([
            'url' => '#',
            'label' => 'Label',
            'icon' => 'fa fa-circle'
        ], $grid);

        $content = $cell->toString();

        $this->assertEquals($content, '<td><a href="#" title="Label"><i class="fa fa-circle"></i></a></td>');
    }

}