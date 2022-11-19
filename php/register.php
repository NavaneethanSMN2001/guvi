<?php
require_once('dbconfig.php');


$firstName  = $_POST['firstName'];
$lastName   = $_POST['lastName'];
$contactNo  = $_POST['contactNo'];
$dob        = $_POST['dob'];
$age        = $_POST['age'];
$gender     = $_POST['gender'];
$address    = $_POST['address'];
$email      = $_POST['email'];
$password   = $_POST['password'];


// echo 'firstName = '.$firstName;

$error;
if(empty($firstName))
{
    $error = "FirstName is Required";  
}
else if(empty($contactNo))
{
    $error = "ContactNo is Required";  
}
else if(empty($gender))
{
    $error = "Gender is Required";  
}
else if(empty($email))
{
    $error = "Email is Required"; 
}
else if(empty($password))
{
    $error = "Password is Required";  
}
else{

    $insertQry = "INSERT INTO `users`(`firstName`, `lastName`, `contactNo`, `dob`, `age`, `gender`, `address`, `email`, `password`) VALUES('$firstName','$lastName','$contactNo','$dob','$age','$gender','$address','$email','$password')";

    $qry = mysqli_query($dbconn,$insertQry);

    if($qry){
        $response['status'] = true;
        $response['message'] = "Register Successfully";
    }
    else{
        $response['status'] = false;
        $response['message'] = "Register Failed";
    }
}

header('Content-Type:application/json; charset=UTF-8');
echo json_encode($response);

?>