<?php

namespace Web;

class Header
{
    public string $title;
    public array $linksHeader;

    public function __construct(string $title, array $linksHeader = [])
    {
        $this->title = $title;
        $this->linksHeader = $linksHeader;
    }

    public function renderStart()
    {
        echo '<head>' . PHP_EOL;
    }

    public function renderLinks(): void
    {
        if (!empty($this->linksHeader)) {
            foreach ($this->linksHeader as $linkData) {
                $output = '<link ';

                foreach ($linkData as $attribute => $value) {
                    $output .= ' ' . $attribute . '= "' . $value . '"';
                }

                $output .= ' >' . PHP_EOL;
                echo $output;
            }
        }
    }

    public function renderTitle()
    {
        echo '<title>' . $this->title . '</title>' . PHP_EOL;
    }

    public function renderEnd()
    {
        echo '</head>' . PHP_EOL;
    }
}