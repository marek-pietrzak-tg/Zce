<?php
$socket = stream_socket_server('tcp://127.0.0.1:888');

while ($conn = stream_socket_accept($socket)) {
    print '--- Client connected to the server ---' . "\n";
    fwrite($conn, "Hello world\n");
    fclose($conn);
}
fclose($socket);