<?php
include 'db.php';
//database connection
 $page = "";
 if($page == ""){
    $page_1 = 0;

    }else{
        $page_1=($page * 30) - 30;
    }


        $query="SELECT * FROM sign_in";
               //code to set page items counter    
        $find_count = mysqli_query($conn, $query);
        $count = mysqli_num_rows($find_count);

//set page count
        $count = ceil($count / 30);

    $select_query_count ="SELECT * FROM sign_in limit $page_1, 30";
    $select_all_posts_query = mysqli_query($conn, $select_query_count);

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="index.css">
</head>
<body> 
        <?php
        include "nav.php";
        ?>  
    <form class="staff_select" method="POST" action= "search.php">
    <select name="name">
                        <option value="Mrs Ada">Mrs Ada</option>
                        <option value="Mrs Tapchin">Mrs Tapchin</option>
                        <option value="Mr Ewdward">Mr Edward</option>
                        <option value="Mr Shima">Mr Shima</option>
                        <option value="Mr Daniel">Mr Daniel</option>
                        <option value="Mr Josiah">Mr Josiah</option>
                    </select>
     <button type="submit" name="search_sign_in">search</button>
    </form>
  
<table class="tble">
        <tr>
            <th> Staff Name</th>
            <th>Sign In date & Time</th>
        </tr>
        <?php
              //fetching user sign-outs
            while( $row = mysqli_fetch_assoc($select_all_posts_query)){
                echo "<tr>";
              
                echo "<td>".$row['staff_name']."</td>";
                echo "<td>".$row['date_time']."</td>";
                echo "</tr>";      
                }
     ?>
    </table>
       <div class="footer">
    <?php
// displaying page number based on count limit
        for($i=1;$i<= $count;$i++){

            if($i === $page){

                echo "<li><a class='active_link' href='sign-in.php?page={$i}'>{$i}</a></li>";
            }else{

        echo "<li><a href='sign-in.php?page={$i}'>{$i}</a></li>";


            }
        }

?>
</div> 
</body>
</html>