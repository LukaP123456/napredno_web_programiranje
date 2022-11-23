<?php
namespace Html;

class Row {
    public int $numCells = 0;
    public function message():string {
        return "<p>The row has $this->numCells cells.</p>";
    }
}