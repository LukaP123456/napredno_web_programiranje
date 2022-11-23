<?php

try {
    require_once 'SelectArray.php';

    $months = require_once 'config.php';

    require_once 'SelectNumber.php';
}
catch (Throwable $th) {
    echo $th->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form>
    <?php
    $object = new SelectArray("sara","myForm","month", $months,3);
    $object->setDefaultValue('August');
    $object->render();

    $object2 = new SelectNumber("sara2", "myForm2", "days", 15, 3);
    $object2->setDefaultValue(6);
    $object2->render();
    ?>
</form>

</body>
</html>
