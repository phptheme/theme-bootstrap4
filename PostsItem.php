<?php
/**
 * @author PhpTheme Dev Team <dev@getphptheme.com>
 * @link http://getphptheme.com
 * @license MIT
 */
namespace PhpTheme\Themes\Bootstrap4;

class PostsItem extends \PhpTheme\Core\Widget
{

    public $title;

    public $url;

    public $created;

    public $description;

    public function toString() : string
    {
        return $this->render('posts-item', [
            'title' => $this->title,
            'created' => $this->created,
            'description' => $this->description,
            'url' => $this->url
        ]);
    }

}