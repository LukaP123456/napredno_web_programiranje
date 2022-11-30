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

    public function renderStart(): void
    {
        echo '<footer>';
    }

    public function renderContent(): void
    {
        echo $this->text;

        if ($this->year)
            echo " " . date("Y");
    }

    public function renderEnd(): void
    {
        echo '</footer>' . PHP_EOL;
    }

}