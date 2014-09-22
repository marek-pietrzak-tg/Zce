<?php
$fp = fopen('/tmp/foo.txt', 'w');

for ($i = 0; $i < 3; $i++) {
  fwrite($fp, 'Put the kettle on ' . PHP_EOL);
}

fwrite($fp, 'We will have our tea');
fclose($fp);

echo file_get_contents('/tmp/foo.txt');
print_r(file('/tmp/foo.txt'));
