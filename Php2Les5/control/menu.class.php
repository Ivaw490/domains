<?php // главное меня сайта

class menu extends Base
{
    private $page = 'menu';

    function getPage()
    {
        return $this->page;
    }

    // построение страницы
    function build()
    {
        $this->title = $this->getPage();
        $this->content = $this->Template($this->getPage());
    }
}