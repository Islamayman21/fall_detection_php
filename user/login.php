<?php
include '../connection.php';

$user_email = $_POST['email'];
$password = md5($_POST['user_password']);


$sqlQuery = "SELECT * FROM users WHERE email = '$user_email' AND user_password = '$password'";

$resultOfQuery = $conn->query($sqlQuery);

if($resultOfQuery->num_rows > 0) 
{
    $userRecord = array();
    while($rowFound = $resultOfQuery->fetch_assoc())
    {
        $userRecord[] = $rowFound;
    }

    echo json_encode(array("success"=>true, "userData"=>$userRecord[0]));
} 
 
else
 {
    echo json_encode(array("success"=>false));
}