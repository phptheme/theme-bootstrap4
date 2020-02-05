<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

use PhpTheme\Core\HtmlHelper;

class Theme extends \PhpTheme\Bootstrap4\Theme
{

    const LAYOUT = Layout::class;

    const MAIN_LAYOUT = MainLayout::class;

    const MAIN_MENU = MainMenu::class;

    const USER_MENU = UserMenu::class;

    const ACTION_MENU = ActionMenu::class;

    const FOOTER_MENU = FooterMenu::class;

    const PAGE = Page::class;

    const POSTS = Posts::class;

    const POSTS_ITEM = PostsItem::class;

    const POST = Post::class;

    public $layoutOptions = [];

    public $mainLayoutOptions = [];

    public $mainMenuOptions = [];

    public $userMenuOptions = [];

    public $actionMenuOptions = [];

    public $pageOptions = [];

    public $postOptions = [];

    public $postsOptions = [];

    public $postsItemOptions = [];

    public $footerMenuOptions = [];

    protected $_layout;    

    public function beginLayout(array $options = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, array_merge($options, ['theme' => $this]));

        return $this->_layout;
    }

    public function endLayout()
    {
        $this->endWidget($this->_layout);
    }

    public function layout(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->layoutOptions, array_merge($options, ['theme' => $this]));

        return $this->widget(static::LAYOUT, $options);
    }

    public function mainLayout(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->mainLayoutOptions, array_merge($options, ['theme' => $this]));

        return $this->widget(static::MAIN_LAYOUT, $options);
    }

    public function mainMenu(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->mainMenuOptions, $options);

        return $this->widget(static::MAIN_MENU, $options);
    }

    public function footerMenu(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->footerMenuOptions, $options);

        return $this->widget(static::FOOTER_MENU, $options);
    }

    public function userMenu(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->userMenuOptions, $options);

        return $this->widget(static::USER_MENU, $options);
    }

    public function actionMenu(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->actionMenuOptions, $options);

        return $this->widget(static::ACTION_MENU, $options);
    }

    public function page(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->pageOptions, $options);

        return $this->widget(static::PAGE, $options);
    }

    public function post(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->postOptions, $options);

        return $this->widget(static::POST, $options);
    }

    public function posts(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->postsOptions, $options);

        return $this->widget(static::POSTS, $options);
    }

    public function postsItem(array $options = [])
    {
        $options = HtmlHelper::mergeOptions($this->postsItemOptions, $options);

        return $this->widget(static::POSTS_ITEM, $options);
    }    

}