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
<!-- $connect = mysqli_connect('mysql-rayannayar.alwaysdata.net', '268515', 'mdpProm13', 'rayannayar_iceberg'); -->
