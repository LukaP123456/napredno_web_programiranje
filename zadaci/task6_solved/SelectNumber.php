<?php

class SelectNumber implements Select {

    protected $name;
    protected $defaultValue = 0;
    protected $id;
    protected $label;
    protected $start;
    protected $end;

    public function __construct($name, $id, $label, $start, $end) {
        $this->name = $name;
        $this->id = $id;
        $this->label = $label;
        $this->start = $start;
        $this->end = $end;
    }

    public function getDefaultValue() {
        return $this->defaultValue;
    }

    public function setDefaultValue($value) {
        $this->defaultValue = $value;
    }

    public function render() {
        if($this->start > $this->end) {
            $tmp = $this->start;
            $this->start = $this->end;
            $this->end = $tmp;
        }

        echo '<label for="'.$this->label.'">'. $this->label.'</label>
                 <select name="'. $this->name .'" id="'. $this->id .'">';
        for($i = $this->start; $i <= $this->end; $i++) {
            if($this->getDefaultValue() == $i) {
                echo '<option value="'. $i . '" selected="selected"> '. $i .'</option>';
            }
            else {
                echo '<option value="'. $i . '"> '. $i .'</option>';
            }
        }
        echo '</select>';
    }
}