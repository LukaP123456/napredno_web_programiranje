<?php

namespace Web;

class Html
{
    public string $lang;

    public function __construct( string $lang)
    {
        $this->lang = $lang;
    }

    public function renderStart()
    {
        echo '<!doctype html>';
        echo '<html lang="'.$this->lang.'">';
    }

    public function renderEnd()
    {
        echo '</html>';
    }

}