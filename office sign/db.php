<?php
//database connection
$server = "localhost";
$username = "root";
$password = "";
$db = "office_sign";
$conn = mysqli_connect($server , $username ,$password , $db);
if(!$conn){
    die("error in database connection").mysqli_error($conn); 

}
?>