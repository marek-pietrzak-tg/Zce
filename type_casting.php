<?php
class Foo {
    private $priv = 1;     // will be stored as key "\0Foo\0priv" (seen as "Foopriv")
    protected $prot = 2;   // will be stored as key "*prot"
    public $pub = 3;       // will be stored as key "pub"
    public $Foopriv = 4;   // will be stored as key "Foopriv"
}

var_dump((array) new Foo());

//--------------

$obj = (object) 'ciao' . PHP_EOL;
var_dump($obj);
echo $obj->scalar;  // outputs 'ciao'

//-------------
var_dump((int) "10.3dummytext2");   // int(10)
var_dump((int) "dummytext224");     // int(0)