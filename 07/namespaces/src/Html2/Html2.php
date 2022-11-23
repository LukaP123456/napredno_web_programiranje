<?php
namespace Html2;

class Table {
    public string $title = "";
    public int $numRows = 0;

    public function message():string {
        return "<p>Table '$this->title' has $this->numRows rows.</p>";
    }
}

class Row {
    public int $numCells = 0;
    public function message():string {
        return "<p>The row has $this->numCells cells.</p>";
    }
}
?>