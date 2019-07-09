<?php

class menu extends Base
{
    private $page = 'menu';

    function getPage()
    {
        return $this->page;
    }

    function build()
    {
        $this->title = $this->getPage();
        $this->content = $this->Template($this->getPage());
    }
}