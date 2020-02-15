<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

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

    const GRID_HEADER_LINK = GridHeaderLink::class;

    const GRID_HEADER_BUTTON = GridHeaderButton::class;    

    const GRID_HEADER_EXTRA_SMALL = GridHeaderExtraSmall::class;

    const GRID_HEADER_SMALL = GridHeaderSmall::class;

    const GRID_HEADER_MEDIUM = GridHeaderMedium::class;

    const GRID_HEADER_LARGE = GridHeaderLarge::class;

    const GRID_HEADER_EXTRA_LARGE = GridHeaderExtraLarge::class;

    const GRID_HEADER_LABEL = GridHeaderLabel::class;

    const GRID_HEADER_NUMBER = GridHeaderNumber::class;

    const GRID_HEADER_PRIMARY_KEY = GridHeaderPrimaryKey::class;

    const GRID_CELL_LINK = GridCellLink::class;

    const GRID_CELL_BUTTON = GridCellButton::class;

    const GRID_CELL_BOOLEAN = GridCellBoolean::class;

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
        return $this->widget(static::LAYOUT, array_merge($options, ['theme' => $this]));
    }

    public function mainLayout(array $options = [])
    {
        return $this->widget(static::MAIN_LAYOUT, array_merge($options, ['theme' => $this]));
    }

    public function mainMenu(array $options = [])
    {
        return $this->widget(static::MAIN_MENU, $options);
    }

    public function footerMenu(array $options = [])
    {
        return $this->widget(static::FOOTER_MENU, $options);
    }

    public function userMenu(array $options = [])
    {
        return $this->widget(static::USER_MENU, $options);
    }

    public function actionMenu(array $options = [])
    {
        return $this->widget(static::ACTION_MENU, $options);
    }

    public function page(array $options = [])
    {
        return $this->widget(static::PAGE, $options);
    }

    public function post(array $options = [])
    {
        return $this->widget(static::POST, $options);
    }

    public function posts(array $options = [])
    {
        return $this->widget(static::POSTS, $options);
    }

    public function postsItem(array $options = [])
    {
        return $this->widget(static::POSTS_ITEM, $options);
    }

    public function createGridHeaderLink(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_LINK, $params);
    }

    public function createGridHeaderExtraSmall(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_EXTRA_SMALL, $params);
    }

    public function createGridHeaderSmall(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_SMALL, $params);
    }

    public function createGridHeaderMedium(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_MEDIUM, $params);
    }

    public function createGridHeaderLarge(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_LARGE, $params);
    }

    public function createGridHeaderExtraLarge(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_EXTRA_LARGE, $params);
    }

    public function createGridHeaderLabel(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_LABEL, $params);
    }

    public function createGridCellLink(array $params = [])
    {
        return $this->createWidget(static::GRID_CELL_LINK, $params);
    }

    public function createGridCellButton(array $params = [])
    {
        return $this->createWidget(static::GRID_CELL_BUTTON, $params);
    }

    public function createGridHeaderButton(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_BUTTON, $params);
    }

    public function createGridHeaderNumber(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_NUMBER, $params);
    }

    public function createGridHeaderPrimaryKey(array $params = [])
    {
        return $this->createWidget(static::GRID_HEADER_PRIMARY_KEY, $params);
    }

}