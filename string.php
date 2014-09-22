<?php
$test = 2.09;

echo <<<HEREDOC
  test $test
  heredoc <html></html>\n
HEREDOC;

echo <<<'NOWDOC'
  test $test
  nowdoc <html></html>
NOWDOC;

define('PI', 3.14);
echo 'const: ' . PI . " double quotes: {PI} doesn't work";
