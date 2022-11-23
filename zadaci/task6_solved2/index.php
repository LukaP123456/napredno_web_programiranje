<style>body {line-height: 2em}</style>
<?php

interface Select {
    public function render();
    public function setDefaultValue($value);
}

class SelectArray implements Select {
    protected $name;
    protected $defaultValue = '';
    protected $id;
    protected $label;
    protected $array;
    protected $key;

    public function __construct($name, $id, $array, $key, $label, $defaultValue = '') {
        $this->name = $name;
        $this->defaultValue = $defaultValue;
        $this->id = $id;
        $this->label = $label;
        $this->array = $array;
        $this->key = $key;
    }

    public function render() {
        if ($this->key === true) {
            foreach ($this->array as $key => $value) {
                $selected = $key === $this->defaultValue ? 'selected' : '';
                $options[] = "<option value='$key' $selected>$value</option>";
            }
            $options = join(PHP_EOL, $options ?? []);
            echo <<< HTML
                <label for="{$this->name}">{$this->label}</label>
                <select name="{$this->name}">
                    <option disabled selected>choose</option>
                    {$options}
                </select><br>
            HTML;
        }
    }

    public function setDefaultValue($value) {
        $this->defaultValue = $value;
    }

    public function getDefaultValue() {
        return $this->array[$this->defaultValue];
    }
}

require_once 'config.php';

$select_array = new SelectArray('month', 'month', $months, true, 'Select a month:');

$select_array->setDefaultValue(3);
$select_array->render();
echo "Default value is {$select_array->getDefaultValue()}<br>";

$select_array->setDefaultValue(4);
$select_array->render();
echo "Default value is {$select_array->getDefaultValue()}<br>";


/* -------------------------------- */


class SelectNumber implements Select {
    protected $name;
    protected $defaultValue = 0;
    protected $id;
    protected $label;
    protected $start;
    protected $end;

    public function __construct($name, $id, $label, $start, $end, $defaultValue = 0) {
        $this->name = $name;
        $this->defaultValue = $defaultValue;
        $this->id = $id;
        $this->label = $label;
        $this->start = $start;
        $this->end = $end;
    }

    public function render() {
        $start = $this->start;
        $end = $this->end;
        if ($start > $end) [$start, $end] = [$end, $start];

        for (;$start<=$end;$start++) {
            $selected = $start === $this->defaultValue ? 'selected' : '';
            $options[] = "<option $selected>$start</option>";
        }

        $options = join(PHP_EOL, $options ?? []);
        echo <<< HTML
            <label for="{$this->name}">{$this->label}</label>
            <select name="{$this->name}">
                <option disabled selected>choose</option>
                {$options}
            </select><br>
        HTML;
    }

    public function setDefaultValue($value) {
        $this->defaultValue = $value;
    }
}

$select_number = new SelectNumber('age', 'age', 'Age:', 10, 30);
$select_number->render();
$select_number->setDefaultValue(20);
$select_number->render();