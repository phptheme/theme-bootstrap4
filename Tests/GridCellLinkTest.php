<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @license MIT
 * @link http://getphptheme.com
 */
namespace PhpTheme\Themes\Bootstrap4\Tests;

use PhpTheme\Themes\Bootstrap4\GridCellLink;
use PhpTheme\Grid\Grid;

class GridCellLinkTest extends \PHPUnit\Framework\TestCase
{

    public function testIndex()
    {
        $grid = new Grid;

        $cell = new GridCellLink([
            'url' => '#',
            'label' => 'Label'
        ], $grid);

        $content = $cell->toString();

        $this->assertEquals($content, '<td><a href="#">Label</a></td>');
    }

}