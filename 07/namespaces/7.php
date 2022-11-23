<?php

require 'src/Html2/Html2.php';

use Html2\{Table, Row};

$table = new Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;

echo $table->message();
echo $row->message();
