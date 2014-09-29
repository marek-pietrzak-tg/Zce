<?php
ob_start();

echo 'Hello ';
ob_clean();     // cleans output buffer

echo 'Hi ';
echo 'World!';
$content = ob_end_clean(); // Hi World!

//----------------------------------------

ob_start("ob_gzhandler");
echo 'test ';

ob_start(function($string) {
        return strtoupper($string);
    });

echo 'hello world!';

ob_end_flush();  // test HELLO WORLD!