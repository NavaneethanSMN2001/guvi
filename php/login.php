<?php
require_once('dbconfig.php');

$email      = $_POST['email'];
$password   = $_POST['password'];

$loginqry = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

$qry = mysqli_query($dbconn, $loginqry);

if(mysqli_num_rows($qry) > 0){
    $userObj = mysqli_fetch_assoc($qry);
    $response['status'] = true;
    $response['message'] = "Login Successfully";
    $response['data'] = $userObj;
}
else{
    $response['status'] = false;
    $response['message'] = "User not found";
}
echo $response;
header('Content-Type:application/json; charset=UTF-8');
echo json_encode($response);

?>