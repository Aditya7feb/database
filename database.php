<?php

error_reporting(0);
session_start();

$serverName = "localhost:1433"; //serverName\instanceName

$connectionInfo = array( "Database"=>"TestDb", "UID"=>"sa", "PWD"=>"[[Aditya]]");

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn) {
     echo "Connection established 123.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
} 

?>