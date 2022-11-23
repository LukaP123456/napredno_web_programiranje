<?php

namespace Web;

class Footer
{
    public string $text;
    public bool $year;

    public function __construct(string $text, $year)
    {
        $this->text = $text;
        $this->year = $year;
    }

    public function renderStart(): void
    {
        echo "<footer>";
    }

    public function renderContent()
    {
        if ($this->year){
            echo $this->text." ".date("Y");
        }
    }

    public function renderEnd(): void
    {
        echo '</footer>';
    }

}