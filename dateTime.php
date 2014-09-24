<?php
$date = new DateTime('2015-02-31'); // max. 28 of Feb
echo $date->format('Y-m-d');        // 2015-03-03

// Fatal error: Uncaught exception 'Exception' with message
// 'DateTime::__construct(): Failed to parse time string (2015-02-32) at position 9 (2): Unexpected character'
$date = new DateTime('2015-02-32');