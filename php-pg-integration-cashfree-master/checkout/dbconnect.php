<?php
$server="localhost";
$username="root";
$password="";
$database="adminpanel";

$conn=mysqli_connect($server,$username,$password,$database);

if(!$conn){
//  echo "Successfully Connected";
// }else{
    die("Not connected successfully".mysqli_connect_error());
}
?>