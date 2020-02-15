<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class GridCellBoolean extends \PhpTheme\Bootstrap4\GridCell
{

    public $yesLabel = 'Yes';

    public $noLabel = 'No';

    protected function getYesLabel()
    {
        return $this->yesLabel;
    }

    protected function getNoLabel()
    {
        return $this->noLabel;
    }

    public function getContent()
    {
        $value = parent::getContent();

        return $value ? $this->getYesLabel() : $this->getNoLabel();
    }

}