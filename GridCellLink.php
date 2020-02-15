<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

use PhpTheme\Core\Link;
use PhpTheme\Core\HtmlHelper;

class GridCellLink extends \PhpTheme\Bootstrap4\GridCell
{

    const LINK = Link::class;

    public $url;

    public $label;

    public $defaultLinkAttributes = [];

    public $linkAttributes = [];

    public $linkTag = 'a';

    public $template = '{label}';

    public $params = [];

    protected function getUrl()
    {
        return $this->url;
    }

    protected function getLabel()
    {
        return $this->label;
    }

    protected function renderTemplate(array $params = []) : string
    {
        return strtr($this->template, $params);
    }

    protected function renderLink(array $options = []) : string
    {
        $linkClass = static::LINK;

        $link = new $linkClass($options);

        return $link->toString();
    }

    public function getContent()
    {
        $linkAttributes = HtmlHelper::mergeAttributes($this->defaultLinkAttributes, $this->linkAttributes);

        return $this->renderLink([
            'attributes' => $linkAttributes,
            'tag' => $this->linkTag,
            'label' => $this->renderTemplate(['{label}' => $this->getLabel()]),
            'url' => $this->getUrl()
        ]);
    }

}