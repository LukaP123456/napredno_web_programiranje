<?php
require "config.php";
require "Select.php";

class SelectArrayClass implements Select
{
    protected string $name;
    protected  $defaultValue = "";
    protected int $id;
    protected string $label;
    protected array $array;
    protected string|int $key;

    public function __construct(string $name, int $id, string $label, array $array, string|int $key)
    {
        $this->name = $name;
        $this->label = $label;
        $this->array = $array;
        $this->key = $key;
    }

    public function render(int $start,int $end)
    {
        if ($this->key) {
            foreach ($this->array as $key => $value) {
                echo $key." ".$value."<br>";
            }
        }
    }

    public function setDefaultValue( $value)
    {
        $this->defaultValue = $value;
    }

    /**
     * @return string
     */
    public function getDefaultValue(): string
    {
        return $this->defaultValue;
    }
}

$selectArray = new SelectArrayClass("Luka", 26120060, "Labela koju sam dodao", $months, true);

$selectArray->render(1,2);