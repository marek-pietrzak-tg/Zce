<?php
class A
{
    public $a = 'A';
    private $b = ['a' => 'AA', 'b' => 'BB'];

    public function __get($v)
    {
        echo "$v,";
        return $this->b[$v];
    }
}

$a = new A();
echo $a->a . ',' . $a->b; // b,A,BB

// this happens, because echo from __get() is printed first