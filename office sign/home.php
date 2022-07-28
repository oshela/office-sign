<?php
//database connection
include 'db.php';
//sign-in
 if(isset($_POST["sign_in"])){
    /*'<script>
     var user-location;
     function getLocation() {
         if (navigator.geolocation) {
             navigator.geolocation.getCurrentPosition(showPosition);
          } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    user-location =position.coords.latitude + " "+ position.coords.longitude;
     </script>';*/
     date_default_timezone_set("africa/lagos");

         $staffname = $_POST["staff_name"];
          $time = date("h:i:sa");
          $month = date("Y/m/d");
 /*$where ='<script>
  user-location =position.coords.latitude + " "+ position.coords.longitude;
 </script>';
 $scn = 9.8790871 + " "+ 8.8742863;
 if($where == $scn){*/
$query= "INSERT INTO sign_in(staff_name, date_time) VALUES('$staffname','$time')";
$result= mysqli_query($conn,$query);
 if(!$result){
     die("error occured".mysqli_error($conn));
     exit();
  }
  else{
    echo $month;
 }
 //break start
}else if(isset($_POST["break_start"])){
    $staffname = $_POST["staff_name"];

    $query= "INSERT INTO break_start(staff_name,date_time) VALUES ('$staffname',now())";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("error occured".mysqli_error($conn));
        exit();
     }
     else{
        echo '<script>
        window.alert("break start recorded successfully");
        </script>';
    }
    //break end
}else if(isset($_POST["break_end"])){
    $staffname = $_POST["staff_name"];
    $query= "INSERT INTO break_end(staff_name,date_time) VALUES ('$staffname',now())";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die("error occured".mysqli_error($conn));
        exit();
     }
     else{
        echo '<script>
        window.alert("break end recorded successfully");
        </script>';
    }
    //sign out
}else if(isset($_POST["sign_out"])){
        $staffname = $_POST["staff_name"];
        $query= "INSERT INTO sign_out(staff_name,date_time) VALUES ('$staffname',now())";
        $result = mysqli_query($conn,$query);
        if(!$result){
            die("error occured".mysqli_error($conn));
            exit();
         }
         else{
            echo '<script>
            window.alert("sign out recorded successfully");
            </script>';
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
    <title>staffs</title>
</head>
<body>
   
        
    <div class="sidebar">
             <?php
             //nav inclusion
            include "nav.php";
            ?>
    <div class="home">
        <div class="dashboard column">
            <ul>
                <li><a href="sign-in.php">Office In</a></li>
                <li><a href="break-start.php">Lunch In</a></li>
                <li><a href="break-end.php">lunch out</a></li>
                <li><a href="sign-out.php">Office out</a></li>
                
            </ul>
        
        </div>
        <div class="sign column">

            <h1>Staff Attendance</h1>
            <div class="staffs">
                <form class="" action = "" method="POST">
                    <select name="staff_name" id="">
                        <option value="Mrs Ada">Mrs Ada</option>
                        <option value="Mrs Tapchin">Mrs Tapchin</option>
                        <option value="Mr Ewdward">Mr Edward</option>
                        <option value="Mr Shima">Mr Shima</option>
                        <option value="Mr Daniel">Mr Daniel</option>
                        <option value="Mr Josiah">Mr Josiah</option>
                    </select>
                    <input type="submit" name="sign_in" value="Sign In">
                    <input type="submit" name="break_start" value="Break-Start">
                    <input type="submit" name="break_end" value="Break-End">
                    <input type="submit" name="sign_out" value="Sign-Out">
                </form>
                   
                </ul>
            </div>

        </div>
   
    </div>
</body>
</html>