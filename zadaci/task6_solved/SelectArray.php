<?php
require 'Select.php';
class SelectArray implements Select {

    protected $name;
    protected $defaultValue = "";
    protected $id;
    protected $label;
    protected $array;
    protected $key;

    public function __construct($name, $id, $label, $array, $key) {
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->array = $array;
        $this->key = $key;
    }

    public function getDefaultValue() {
        return $this->defaultValue;
    }

    public function setDefaultValue($value) {
        $this->defaultValue = $value;
    }

    public function render() {

        if(!$this->key) {
            return "";
        }

        echo '<label for="'.$this->label.'">'. $this->label.'</label>
                 <select name="'. $this->name .'" id="'. $this->id .'"> ';
        foreach ($this->array as $value) {
            if($this->getDefaultValue() == $value) {
                echo '<option value="'. $value . '" selected="selected"> '. $value .'</option>';
            }
            else {
                echo '<option value="'. $value . '"> '. $value .'</option>';
            }
        }
        echo '</select>';
    }

}