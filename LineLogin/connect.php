<?php
$serverName = "LAPTOP-LAQFB1K4";
$connectionOptions = array(
    "Database" => "fairman",
    "Uid" => "",
    "PWD" => "",
    "CharacterSet" => "UTF-8" // ระบุ charset เป็น UTF-8

);

// ทำการเชื่อมต่อ
$conn = sqlsrv_connect($serverName, $connectionOptions);
if( $conn ) {
    echo "Connection Successfull.";

}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}