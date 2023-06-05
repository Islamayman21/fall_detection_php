<?php
include '../connection.php';

$user_email = $_POST['email'];

$sqlQuery = "SELECT * FROM users WHERE email = '$user_email'";

$resultOfQuery = $conn->query($sqlQuery);

if($resultOfQuery->num_rows > 0) 
{
    echo json_encode(array("emailFound"=>true));
} else {
    echo json_encode(array("emailFound"=>false));
} 