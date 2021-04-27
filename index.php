<?php


$server = "localhost";
$username = "root";
$password="";

$con = mysqli_connect( $server, $username, $password);

if(!$con){
    die("connection to this db failed due to " . mysqli_connect_error());
}
 
echo "Success connection to database";
 
?> 