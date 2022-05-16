<?php
function dbconnect()
{
    static $connect = null;
    if ($connect === null) {
        $connect = mysqli_connect('localhost', 'root', 'root', 'iceberg');
    }
    return $connect;
}
?>