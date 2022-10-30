<!--2.-->
<!--Create function getDropDownMenu with parameters: label, start, end, name, default. Default is optional parameter.-->
<!---->
<!--This function renders the drop down select list.-->
<!---->
<!--Call this function three times:-->
<!---->
<!--1. to render select list for days (1-31)-->
<!--2. to render select list with month (1-12)-->
<!--3. to render select list with year (1945-2021)-->
<!---->
<!--If start parameter is greater then end, change the values for them (start becomes end and end becomes start)-->
<?php

function getDropdownMenu(string $label, int $start, int $end, string $name, string $default = 'optional'): void
{
    echo '<label for="' . $label . '">' . $label . '</label><br>';
    echo '<select name="' . $name . '">';

    if ($start > $end) {
        [$start, $end] = [$end, $start];
    }

    if ($name === 'months') {
        for ($i = 0; $i < $end; $i++) {
            $time = strtotime(sprintf('first day of +%d month', $i));
            $value = date('M', $time);
            echo '<option> ' . $value . ' </option>';
        }
    }

//    if ($name === 'days') {
//        for ($i = $end; $i > 0; $i--) {
//            $time = strtotime(sprintf('first day of +%d month', $i));
//            $value = date('D', $time);
//            echo '<option> ' . $value . ' </option>';
//        }
//    }

    if ($name === 'days') {
        for ($i = 1; $i <= 31; $i++) {
            echo '<option> ' . $i . ' </option>';
        }
    }

    if ($name === 'years') {
        foreach (range($start, $end) as $x) {
            echo '<option> ' . $x . ' </option>';
        }
    }
    echo '</select><br>';
}

//getDropdownMenu(label: 'months', start: 1, end: 12, name: 'months');
//getDropdownMenu(label: 'days', start: 1, end: 31, name: 'days');
//getDropdownMenu(label: 'years', start: 2021, end: 1945, name: 'years');

?>

