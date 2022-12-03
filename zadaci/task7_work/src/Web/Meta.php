<?php

namespace Web;

class Meta
{
    public array $metas;

    public function __construct($metas)
    {
        $this->metas = $metas;
    }

    public function renderMetaTags(): void
    {
        foreach ($this->metas as $meta) {
            $output = '<meta ';
            foreach ($meta as $attribute => $value) {
                $output .= $attribute . '="' . $value . '" ';
            }
            $output .= '>' . PHP_EOL;
            echo $output;
        }
    }
}