<?php // главное меня сайта

class menu extends Base
{
    private $page = 'menu';

    private function getPage()
    {
        return $this->page;
    }

    // построение страницы
    protected function build()
    {
        $this->title = $this->getPage();
        $this->content = $this->Template($this->getPage());
    }
}