<?php
require "src/Html/Table.php";
require "src/Html/Row.php";

use Html\Table;
use Html\Row;


$table = new Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Row();
$row->numCells = 3;

echo $table->message();
echo $row->message();
