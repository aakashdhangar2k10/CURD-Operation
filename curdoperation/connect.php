<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "curdoperation_db";


 $con = mysqli_connect($servername,$username,$password,$database);

if(!$con){
    die(mysqli_error($con));
}
?>