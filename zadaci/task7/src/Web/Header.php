<?php

namespace Web;

class Header
{
    public string $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function renderStart()
    {
        echo '<head>';
    }

    public function renderTitle()
    {
        echo '<title>'.$this->title.'</title>';
    }

    public function renderEnd()
    {
        echo '</head>';
    }


}