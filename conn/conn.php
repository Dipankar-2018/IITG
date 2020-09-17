<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "sangeetadb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{ 
}
else
{
   die("Connection failed Due to".mysqli_connect_error());
}
