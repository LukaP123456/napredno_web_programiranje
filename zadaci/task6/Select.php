<?php

interface Select
{

    public function render(int $start,int $end);

    public function setDefaultValue($value);
}