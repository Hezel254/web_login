<?php
include "connection.php";

$email=$_POST['email'];
$password=$_POST['password'];

if (isset($email)&&isset($password)){
    $statement=$connection->prepare("SELECT * FROM tbl_login where email=? and password=? ");
    $statement->bind_param("ss",$email,$password);
    $statement->execute();
    $result=$statement->get_result();
    $row=$result->num_rows;
    if ($row >=1){
        echo"Login success";
    }
    else{
        echo"Login failed";
    }
}
else{
    echo"empty values";
}