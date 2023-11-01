<?php
$server="sql104.infinityfree.com";
$username="if0_35294387";
$password="XDeyeyyLMSC9IP";
$database="if0_35294387_mywebdata";

$con=mysqli_connect($server,$username , $password, $database);
if(!$con)
{
     // die ("Error:".sqli_connect_error());
     echo "data base is not connected";
}
// echo "Database is connected";
?>