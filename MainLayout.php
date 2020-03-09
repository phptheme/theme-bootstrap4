<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $layout = [];

    public $title;

    public $siteName;

    public $siteTitle;

    public $siteDescription;

    public $mainMenu;

    public $mainMenuOptions = [];

    public $actionMenu;

    public $actionMenuOptions = [];

    public $breadcrumbs;

    public $breadcrumbsOptions = [];

    public $errorMessages = [];

    public $infoMessages = [];

    public $successMessages = [];

    public $accountMenu = [];

    public $accountMenuOptions = [];

    public $userMenu = [];

    public $userMenuOptions = [];

    public $accountLabel = 'My Account';

    public $footerMenu = [];

    public $footerMenuOptions = [];

    public $copyright;

    public $socialMenu = [];

    public $socialMenuOptions = [];

    public function toString() : string
    {
        $breadcrumbs = $this->breadcrumbsOptions;

        $breadcrumbs['items'] = $this->breadcrumbs;

        $actionMenu = $this->theme->actionMenu(array_merge(
            $this->actionMenuOptions,
            [
                'items' => $this->actionMenu
            ]
        ));

        $mainMenu = $this->mainMenuOptions;

        $mainMenu['items'] = $this->mainMenu;

        $userMenu = $this->userMenuOptions;

        $userMenu['items'] = $this->userMenu;

        if (isset($this->accountMenu['logout']))
        {
            $mainMenu = $this->theme->mainMenu(array_merge_recursive(
                $mainMenu,
                [
                    'items' => [
                        'account' => [
                            'label' => $this->accountLabel,
                            'items' => $this->accountMenu,
                            'attributes' => [
                                'class' => ['dropdown']
                            ]
                        ]
                    ]
                ]   
            ));
        }
        else
        {
            $mainMenu = $this->theme->mainMenu(array_merge_recursive(
                $mainMenu,
                [
                    'items' => $this->accountMenu
                ]
            ));
        }

        $footerMenu = $this->theme->footerMenu(array_merge($this->footerMenuOptions, ['items' => $this->footerMenu]));

        $layout = $this->layout;

        if ($this->title)
        {
            $layout['title'] = $this->title;
        }

        $socialMenu = $this->theme->socialMenu(array_merge($this->socialMenuOptions, ['items' => $this->socialMenu]));

        return $this->render('main-layout', [
            'layout' => $layout,
            'content' => $this->content,
            'title' => $this->title,
            'copyright' => $this->theme->getCopyright($this->copyright),
            'siteName' => $this->siteName,
            'siteTitle' => $this->siteTitle,
            'siteDescription' => $this->siteDescription,
            'mainMenu' => $mainMenu,
            'actionMenu' => $actionMenu,
            'breadcrumbs' => $breadcrumbs,
            'errorMessages' => $this->errorMessages,
            'infoMessages' => $this->infoMessages,
            'successMessages' => $this->successMessages,
            'userMenu' => $userMenu,
            'footerMenu' => $footerMenu,
            'socialMenu' => $socialMenu,
            'accountMenu' => ''
        ]);
    }

}