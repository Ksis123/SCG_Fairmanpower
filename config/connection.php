<?php
$serverName = "52.139.193.40, 3511";
$connectionOptions = array(
    "Database" => "fairman",
    "Uid" => "follow",
    "PWD" => "Follow@2022",
    "CharacterSet" => "UTF-8" 
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn) {
    echo "Connection Successfull.";
} else {
    echo "Connection could not be established.";
    die(print_r(sqlsrv_errors(), true));
}
?>