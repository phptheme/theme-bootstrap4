<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

class Grid extends \PhpTheme\Bootstrap4\Grid
{

    public $containerTag = 'div';

    public $containerAttributes = [];

    public $defaultContainerAttributes = ['class' => 'table-responsive'];

    public function toString() : string
    {
        $return = parent::toString();

        if ($return)
        {
            $attributes = HtmlHelper::mergeAttributes($this->defaultContainerAttributes, $this->containerAttributes);

            return HtmlHelper::tag($this->containerTag, $return, $attributes);
        }

        return $return;
    }

}