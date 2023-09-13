<?php
session_start();
if(!$_SESSION){
 header('location:login.php');
}

include('include/connection.php');
?>


<?php
// Global Variable
$report_id =  $_GET['r'] ;
$q = $_GET['q'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/admin.png">

    <title>Report Details</title>
<?php

include('include/header.php');
// fetch a single person record

?>

<div class="main mt-5">

<?php

  
    $query = "SELECT * FROM student_table WHERE id = $q";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      
    if(mysqli_num_rows($result) > 0){
    
        echo <<<PHP


<h3 class = "text-center">{$row['surname']}  {$row['forename']}</h3>
<hr>

<div class="row shadow">
    <div class="col-sm-2 profile d-none d-sm-block">
        <img class = "rounded-circle" src="img/student.png" alt="profile pix" style = "width:70%; margin-left:2.3em">
    <div>
    <table class="table table-responsive">
    <tr><td> ID</td> <td>{$row['id']}</td></tr>
    <tr><td>Email</td> <td>{$row['email']}</td></tr>
    </table>
    </div>
    </div>

   
PHP;

    }

?>


<div class="col-sm-9 detail">
<?php
    
$query = "SELECT * FROM report_tbl WHERE report_id = $report_id ORDER BY report_id DESC";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  echo '<h4 class "text-center">'. $row['title']. '</h4>';
  echo '<div class = "d-flex align-items-end" style ="width:100%;">'. $row['report']. '</div> <hr>';
  echo '<div class = "text-end mt-5">'. $row['time']. '</div>';


?>

</div>
    
    </div>

      
    </div>
    </div>


</div>


</div>


    
</body>
</html>