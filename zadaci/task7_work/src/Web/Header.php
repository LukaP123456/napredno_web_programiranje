<?php

namespace Web;
require "Meta.php";
require_once './assets/config.php';
require_once './assets/functions.php';

class Header
{
    public string $title;
    public array $linksHeader;

    public function __construct(string $title, array $linksHeader = [])
    {
        $this->title = $title;
        $this->linksHeader = $linksHeader;
    }

    public function renderHeader($metas)
    {
        $currentPage = getCurrentPage();
        $meta = new Meta($metas[$currentPage]);

        echo '<head>' . PHP_EOL;
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
        $meta->renderMetaTags();
        echo '<title>' . $this->title . '</title>' . PHP_EOL;
        echo '</head>' . PHP_EOL;
    }
}