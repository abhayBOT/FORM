<?php

$DBhost = "localhost";
$DBuser = "root";
$DBpassword ="";
$DBname="project";

$conn = mysqli_connect($DBhost, $DBuser, $DBpassword, $DBname);
if ($conn) {
echo "Done";
}
if(!$conn){
 die("Connection failed: " . mysqli_connect_error());
}

?>
