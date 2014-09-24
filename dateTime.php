<?php
$date = new DateTime('2015-02-31');             // max. 28 of Feb
echo $date->format('Y-m-d') . PHP_EOL;          // 2015-03-03

$date = new DateTime('2015-05-31');
$date->sub(new DateInterval('P1M'));

// 2015-05-01, because it was internally changed to 2015-04-31, which doesn't exist
// so was again changed to the next day
echo $date->format('Y-m-d');

// Fatal error: Uncaught exception 'Exception' with message
// 'DateTime::__construct(): Failed to parse time string (2015-02-32) at position 9 (2): Unexpected character'
$date = new DateTime('2015-02-32');