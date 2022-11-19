<?php

$dbconn = mysqli_connect('localhost','root','user');
if($dbconn){
    echo "Connected Sucessfully";
}
else{
    die("connection failed".mysqli_connect_error());
}

?>