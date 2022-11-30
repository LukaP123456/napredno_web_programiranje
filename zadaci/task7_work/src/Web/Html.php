<?php

namespace Web;

class Html
{
    public string $lang;

    public function __construct(string $lang)
    {
        $this->lang = $lang;
    }

    public function renderStart()
    {
        echo '<!DOCTYPE html>' . PHP_EOL;
        echo '<html lang="' . $this->lang . '">' . PHP_EOL;
    }

    public function renderEnd()
    {
        echo '</html>';
    }
}