<?php
require "Select.php";
require "config.php";

class SelectNumber implements Select
{

    protected $name;
    protected $defaultValue = 0;
    protected $id;
    protected $label;
    protected $start;
    protected $end;

    public function __construct(string $name, int $id, string $label, array $array, string|int $key)
    {
        $this->name = $name;
        $this->label = $label;
        $this->array = $array;
        $this->key = $key;
    }

    public function render(int $start, int $end)
    {
        if ($start > $end) {
            [$start, $end] = [$end, $start];
        }
        echo '<select name="cars" id="cars">';
        for ($i = $start; $i < $end; $i++) {
            echo '<option value="'.$this->array[$i].'">' . $this->array[$i] . '</option>';
            if ($this->array[$i] == "March"){
                echo '<option value="'.$this->array[$i].'" selected>' . $this->array[$i] . '</option>';
            }

        }
        echo '</select>';
    }

    public function setDefaultValue($value)
    {
        $this->defaultValue = $value;
    }
}

$selectNumber = new SelectNumber("Luka", 26120060, "Label koju sam dodao", $months, true);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="">

    <label for="month"> Month</label>
        <?php
        $selectNumber->render(1,12);
        ?>
    <p>Default value is march</p>

    Month: <select name="" id="">
        <option value="april" selected>April</option>
    </select>
    <p>Default value is April</p>

    Age: <select name="" id="">
        <option value="">choose</option>
    </select>
    <br>
    <br>
    Age: <select name="" id="">
        <option value="">20</option>
    </select>

</form>


</body>
</html>
