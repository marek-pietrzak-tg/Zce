<?php
// arrays

define("index", "10");
$arr = [];
$arr[10] = 1;
$arr["10"] = 3;
$arr[index] = 2;
var_dump($arr);     // [10 => 2]


//-----------

$arr = [2 => 'dwa', 5 => 'piec'];
unset($arr[5]);
$arr[] = 'trzy';
var_dump($arr);         // key - 6, as 5 used to exist in this array

//-----------

function arraytest()
{
	echo 'test';
	return [1,2,3];
}
foreach (arraytest() as $a) {   // echo 'test' is called just once
	var_dump($a);
}
