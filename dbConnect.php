<?php
$servaername="localhost";
$username="root";
$password="Sandeep@250899";
$dbName="crudoperation";
$con=new mysqli($servaername,$username,$password,$dbName);
if(!$con){
    die("Connection failed " .mysqli_connect_error());
}
?>