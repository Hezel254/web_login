<?php
include "connection.php";

$email=$_POST['email'];
$password=$_POST['password'];

if (isset($email)&&isset($password)){
    $statement=$connection->prepare("INSERT INTO tbl_login(email,password)values(?,?)");
    $statement->bind_param("ss",$email,$password);
    if (!$statement->execute()){
        echo"Not inserted";
    }
    else {
        echo"Inserted succesfully";
    }
}
else{
    echo"empty values";
}