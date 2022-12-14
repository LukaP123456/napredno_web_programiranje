<?php

namespace Web;

class Body
{
    public string $class;
    public string $id;

    public function __construct(string $class,string $id = '')
    {
        $this->class = $class;
        $this->id = $id;
    }

    public function renderStart(): void
    {
        echo '<body class="' . $this->class . '"';
        if (!empty($this->id)) {
            echo 'id= "' . $this->id . '"';
        }
        echo '>';
    }

    public function renderEnd(): void
    {
        echo '</body>';
    }


}