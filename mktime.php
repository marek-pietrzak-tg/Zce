<?php
// mktime parameters order!:
// hour, minute, second, month, day, year

// all below will print "Jan-01-1998" as mktime will automatically calculate the correct value for out-of-range input.
echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997)) . PHP_EOL;
echo date("M-d-Y", mktime(0, 0, 0, 13, 1, 1997)) . PHP_EOL;
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998)) . PHP_EOL;
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98)) . PHP_EOL;