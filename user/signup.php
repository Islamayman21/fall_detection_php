<?php
include '../connection.php';

$user_name = $_POST['username'];
$user_email = $_POST['email'];
$user_phone = $_POST['phone'];
$password = md5($_POST['user_password']);
$confPass = $_POST['conf_password'];

$sqlQuery = "INSERT INTO users SET username = '$user_name', email = '$user_email', phone = '$user_phone', user_password = '$password', 
conf_password = '$confPass'";

$resultOfQuery = $conn->query($sqlQuery);

if($resultOfQuery) 
{
    echo json_encode(array("success"=>true));
} else {
    echo json_encode(array("success"=>false));
} 