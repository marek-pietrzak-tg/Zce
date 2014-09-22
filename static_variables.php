<?php
function foo()
{
    static $bar = 0;    // static variable is initialised only for the first function call

    echo $bar . "\n";
    $bar++;
}

foo();      // 0
foo();      // 1
foo();      // 2

//--------

function test()
{
    static $foo = 5;

    $foo--;
    if ($foo > 0) {
        test();
    }

    echo ++$foo . ' '; // 1 2 3 4 5
}

test();