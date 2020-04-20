<?php
include "class/Stack.php";

class ReverseNumber implements Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit = 5)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($data)
    {
        return array_unshift($this->stack, $data);
    }

    public function pop()
    {
        return array_shift($this->stack);
    }

    public function top()
    {
        current($this->stack);
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }

    public function isFull()
    {
        return count($this->stack) == $this->limit;
    }
}