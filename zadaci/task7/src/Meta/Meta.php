<?php

class Meta
{
    public array $metas;

    public function __construct(array $metas)
    {
        $this->metas = $metas;
    }

    public function renderMetaTags()
    {
        foreach ($this->metas as  $key=>$value)
            echo '<meta name="'.$key.'" content='.$value.' >';
    }
}