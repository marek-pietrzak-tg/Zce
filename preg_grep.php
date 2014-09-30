<?php
$arr = [1, 2, 3.3, 'ala ma kota', 'jeden 1'];
$pattern = '/^[\d]+$/';
print "preg_grep:\n";

print_r(preg_grep($pattern, $arr));
/*
Array
(
    [0] => 1
    [1] => 2
)
 */

print "preg_grep with invert flag:\n";
print_r(preg_grep($pattern, $arr, PREG_GREP_INVERT));
/*
 Array
(
    [2] => 3.3
    [3] => ala ma kota
    [4] => jeden 1
)
 */