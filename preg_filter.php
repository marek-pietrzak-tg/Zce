<?php
$subject = ['1', 'a', '2', 'b', '3', 'A', 'B', '4'];
$pattern = ['/\d/', '/[a-z]/', '/[1a]/'];
$replace = ['A:$0', 'B:$0', 'C:$0'];

echo "preg_filter returns\n";
print_r(preg_filter($pattern, $replace, $subject));     // will not show A & B
/*
 Array
(
    [0] => A:C:1
    [1] => B:C:a
    [2] => A:2
    [3] => B:b
    [4] => A:3
    [7] => A:4
)
 */

echo "preg_replace returns\n";
print_r(preg_replace($pattern, $replace, $subject));    // A & B are copied
/*
 Array
(
    [0] => A:C:1
    [1] => B:C:a
    [2] => A:2
    [3] => B:b
    [4] => A:3
    [5] => A
    [6] => B
    [7] => A:4
)
 */
//--------------------
$subject = 'bob@example.com, fred@example.com, foo';
$pattern = ['/([a-z]+@)([a-z]+\.[a-z]+)/'];
$replace = "$1test.$2 [$0]\n";

echo "preg_filter returns\n";
echo preg_filter($pattern, $replace, $subject);
// bob@test.example.com [bob@example.com]
//, fred@test.example.com [fred@example.com]
//, foo

//------
// subject is filtered against first pattern, result is filtered against the second pattern
// $replace is used in both cases
$pattern = ['/([a-z]+@)([a-z]+\.[a-z]+)/', '/[a-z]+/'];
$replace = "$1test.$2 [$0]\n";
echo "\npreg_filter returns\n";
echo preg_filter($pattern, $replace, $subject);
/*
 test. [bob]
@test. [test]
.test. [example]
.test. [com]
 [test. [bob]
@test. [example]
.test. [com]
]
, test. [fred]
@test. [test]
.test. [example]
.test. [com]
 [test. [fred]
@test. [example]
.test. [com]
]
, test. [foo]
 */

// Now as $replace is an array, the first key will be used with the first pattern.
// As there is no second key, everything matching the second pattern will be removed
$replace = (array) $replace;
echo "\npreg_filter returns\n";
echo preg_filter($pattern, $replace, $subject);
// @.. [@.]
//, @.. [@.]
//,