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
        echo '<nav>';

//        $links = [
//            "Home" => ['class'=>'active','url'=>'1.html','title'=>'title text'],
//            "Contact" => ['class'=>'','url'=>'2.html','title'=>'title text'],
//        ];

        foreach ($this->links as $linkText=>$linkData){
            echo '<a href="'.$linkData['url'].' class='.$linkData['class'].'" >'.$linkText.'</a>';
        }

//        foreach ($this->links as $key=>$value){
//            echo '<a href="'.$key.'">'.$value.'</a>';
//        }
        echo '</nav>';
    }
}