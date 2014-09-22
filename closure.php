<?php
$message = 'hello';

$greet = function($name) use ($message) {
  echo $message . ' ' . $name;
};

$message = 'hi';

$greet('Marek');
// output: hello Marek (not 'hi Marek')
