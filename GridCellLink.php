<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

use PhpTheme\HtmlHelper\HtmlHelper;

class GridCellLink extends \PhpTheme\Bootstrap4\GridCell
{

    public $url;

    public $label;

    public $linkTag = 'a';

    public $linkAttributes = [];

    public $template = '{label}';

    public $params = [];

    protected function renderLink(array $params = [], array $linkAttributes = []) : string
    {
        $content = strtr($this->template, $params);

        return HtmlHelper::tag($this->linkTag, $content, $linkAttributes);
    }

    public function getContent()
    {
        $linkAttributes = $this->linkAttributes;

        $linkAttributes['href'] = $this->url;

        $linkAttributes['title'] = $this->label;

        $params = $this->params;

        $params['{label}'] = $this->label;

        return $this->renderLink($params, $linkAttributes);
    }

}