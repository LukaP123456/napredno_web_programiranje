<?php

namespace Web;

class Footer
{
    public string $text;
    public bool $year;

    public function __construct(string $text, bool $year = false)
    {
        $this->text = $text;
        $this->year = $year;
    }

    public function renderFooter()
    {
        echo '<footer>';
        echo $this->text;

        if ($this->year)
            echo " " . date("Y");
        echo '</footer>' . PHP_EOL;

    }
}