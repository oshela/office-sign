<?php
include "db.php";
?>





<?php
//starting login session
session_start();
?>

<?php
//collecting login form data
if(isset($_POST['login'])){
    
$username = $_POST['username'];
$password = $_POST['password'];


$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$query = "SELECT* FROM admin WHERE user_name ='{$username}' ";
//validating login data
$select_user_query =mysqli_query($conn,$query);
if(!$select_user_query){
    die ("query failed".mysqli_error($conn));
}

while($row = mysqli_fetch_assoc($select_user_query)){
    $user_name = $row['user_name'];
    $pass_word = $row['pass_word'];

if($username === $user_name && $password === $pass_word ){
    $_SESSION['username'] = $user_name;

    header("Location: home.php");
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>LOGIN</title>
</head>
<style>
body{
   
    font-family: sans-serif;
    background:#3498db ;

}
</style>
<body>
<form class="box" action = "" method="post">
        <h1>login</h1>
        <input class="login-text" type="text"name ="username" placeholder="username">
        <input class="login-text" type="password"name ="password" placeholder="password">
        <input class = "login-password" type="submit"name ="login" placeholder="login">

</form>
    
</body>
</html>