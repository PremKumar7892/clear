<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "premkumar";

$con = mysqli_connect($server, $username, $password, $dbname)
if(!$con)
{
    echo "not connected";
}
else
{
    echo "connected";
}