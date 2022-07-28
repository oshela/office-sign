<?php
include "db.php"; 

include "nav.php";
if(isset($_POST['search_sign_in'])){

    $search = $_POST['name'];

 
         $query =  "SELECT* FROM sign_in WHERE staff_name = '$search' ";
         $search_query = mysqli_query($conn, $query);
         
 
         if(!$search_query){
             die("query failed" .mysqli_error($conn));
 
         }
 
         $count = mysqli_num_rows($search_query);
         if($count == 0){
             echo "<h1 style =text-align:center>NO RESULT</h1>";
         }
         else{
            
             while( $row = mysqli_fetch_assoc($search_query)){
                $staff_name = $row['staff_name'];
                $date_time = $row['date_time'];
                 ?>
     
                    <table>
                        <tr>
                            <th>name</th>
                            <th>date and time</th>
                        </tr>
                       <tr>
                        <td><?php echo $staff_name ; ?></td>
                        <td>
                            <?php echo $date_time ; ?>
                        </td>
                      </tr>
                    </table>
                     <?php }
    
}
}else if(isset($_POST['search_break_start'])){

    $search = $_POST['name'];

 
         $query =  "SELECT* FROM break_start WHERE staff_name= '$search' ";
         $search_query = mysqli_query($conn, $query);
         
 
         if(!$search_query){
             die("query failed" .mysqli_error($conn));
 
         }
 
         $count = mysqli_num_rows($search_query);
         if($count == 0){
             echo "<h1>NO RESULT</h1>";
         }
         else{
            
             while( $row = mysqli_fetch_assoc($search_query)){
                $staff_name = $row['staff_name'];
                $date_time = $row['date_time'];
                 ?>
     
                <table>
                        <tr>
                            <th>name</th>
                            <th>date and time</th>
                        </tr>
                       <tr>
                        <td><?php echo $staff_name ; ?></td>
                        <td>
                            <?php echo $date_time ; ?>
                        </td>
                      </tr>
                </table>
    <?php }
    
}
}else if(isset($_POST['search_break_end'])){
    $search = $_POST['name'];

 
         $query =  "SELECT* FROM break_end WHERE staff_name = '$search' ";
         $search_query = mysqli_query($conn, $query);
         
 
         if(!$search_query){
             die("query failed" .mysqli_error($conn));
 
         }
 
         $count = mysqli_num_rows($search_query);
         if($count == 0){
             echo "<h1>NO RESULT</h1>";
         }
         else{
            
             while( $row = mysqli_fetch_assoc($search_query)){
                $staff_name = $row['staff_name'];
                $date_time = $row['date_time'];
                 ?>
     
                    <table>
                        <tr>
                            <th>name</th>
                            <th>date and time</th>
                        </tr>
                       <tr>
                        <td><?php echo $staff_name ; ?></td>
                        <td>
                            <?php echo $date_time ; ?>
                        </td>
                      </tr>
                    </table>
                     <?php }
    
}
}else if(isset($_POST['search_sign_out'])){
     $search = $_POST['name'];
   
 
         $query =  "SELECT* FROM sign_out WHERE staff_name = '$search' ";
         $search_query = mysqli_query($conn, $query);
         
 
         if(!$search_query){
             die("query failed" .mysqli_error($conn));
 
         }
 
         $count = mysqli_num_rows($search_query);
         if($count == 0){
             echo "<h1>NO RESULT</h1>";
         }
         else{
            
             while( $row = mysqli_fetch_assoc($search_query)){
                $staff_name = $row['staff_name'];
                $date_time = $row['date_time'];
                 ?>
     
          
                <table>
                        <tr>
                            <th>name</th>
                            <th>date and time</th>
                        </tr>
                       <tr>
                        <td><?php echo $staff_name ; ?></td>
                        <td>
                            <?php echo $date_time ; ?>
                        </td>
                      </tr>
                    </table>
                     <?php }
    
}
}
?>          