<?php

namespace Web;

class Navigation
{
    public array $links;

    public function __construct($links)
    {
        $this->links = $links;
    }

    public function renderNavigation()
    {
        echo '<nav>' . PHP_EOL;

        foreach ($this->links as $linkText => $linkData) {

            $output = '<a ';

            foreach ($linkData as $attribute => $value) {
                $output .= $attribute . '="' . $value . '" ';
            }

            $output .= '>' . $linkText . '</a> ' . PHP_EOL;
            echo $output;
        }
        echo '</nav>' . PHP_EOL;
    }
}