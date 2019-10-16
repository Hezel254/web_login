<?php
$databaseName="hezel";
$host="localhost";
$password="";
$user="root";


$connection=mysqli_connect($host,$user,$password,$databaseName);
if ($connection){
    echo"connected";
}