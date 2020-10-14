<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="chocomania";

$conn=new mysqli ($hostname, $username, $password, $dbname);

if($conn->connect_error)
{
    die("connection failed:" . $conn->connect_error);

}
?>