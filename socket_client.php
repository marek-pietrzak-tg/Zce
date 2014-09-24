<?php
$socket = stream_socket_client('tcp://127.0.0.1:888');
stream_filter_append($socket, 'zlib.inflate');

while (!feof($socket)) {
    echo fread($socket, 100);
}
fclose($socket);