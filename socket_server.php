<?php
$socket = stream_socket_server('tcp://127.0.0.1:888');

while ($conn = stream_socket_accept($socket)) {
    fwrite(STDOUT, '--- Client connected to the server ---' . "\n");

    stream_filter_append($conn, 'string.toupper');
    stream_filter_append($conn, 'zlib.deflate');

    fwrite($conn, "Hello world\n");
    fclose($conn);
}
fclose($socket);