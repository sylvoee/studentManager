<?php
session_start();
if(!$_SESSION){
 header('location:login.php');
}

include('include/connection.php');
?>

<?php
// Global varaible

$q = $_GET['q'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/admin.png">
    <?php
    
    $query = "SELECT * FROM student_table WHERE id = $q ";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      
    if(mysqli_num_rows($result) > 0){?>

    <title><?php echo $row['forename'] . " " .$row['surname'] ?></title>
<?php

include('include/header.php');
// fetch a single person record

?>

<div class="main mt-5">

<?php
    
        echo <<<PHP


<h3 class = "text-center">{$row['surname']}  {$row['forename']}</h3>
<hr>

<div class="row shadow">
    <div class="col-sm-2 profile d-none d-sm-block">
        <img class = "rounded-circle " src="img/student.png" alt="profile pix" style = "width:70%; margin-left:2.4em">
    <div>
    <table class="table table-responsive">
    <tr><td>Register Date</td> <td>{$row['time']}</td></tr>
    </table>
    </div>

    </div>
    

    <div class="col-sm-4 p-4 text-center">
    <h4>Contact Details   <i class ="fa fa-address-book"></i></h4>
    <hr>
    <table class="table table-responsive">
    <tr><td>Phone number</td> <td>{$row['phone']}</td></tr>
    <tr><td>Email</td> <td>{$row['email']}</td></tr>
    <tr><td>Address</td> <td>{$row['address']}</td></tr>

    
    </table>
    </div>

    <div class="col-sm-6 p-4 text-center">
    <h4>Reports  <i class ="fa fa-file"></i></h4>
    <hr>
    <table class="table table-responsive">
    <tr><td>Unique ID</td> <td>{$row['id']}</td></tr>
    <tr><td>Gender</td> <td>{$row['gender']}</td></tr>
    <tr><td>Tutor Group</td> <td>{$row['tutor']}</td></tr>


    <div>
    <a href = "report.php?q={$row['id']}& n={$row['forename']}" class=" btn btn-info text-decoration-none"> Make A Report </a>
    
    </div>
   

    

   
  </div>
</div>
    

    
   

    
    </table>
    </div>


</div>
PHP;

    }

?>

<div class="report text-center m-5 shadow">
  <h3 class="h3 text-center">
    Previous Reports
    <hr>
  </h3>
  <div class = "p-report">
<?php

    
    $query = "SELECT * FROM report_tbl WHERE student_id = $q ORDER BY report_id DESC";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);
      while($row = mysqli_fetch_assoc($result)){ ?>
     <div class="a-rep row">

      <div class="col-sm-12">
      <a class ="text-decoration-none" href="report-detail.php?q= <?php echo $row['student_id'] ;?> & r= <?php echo $row['report_id'] ;?>  ">
     <b><?php echo $row['title']; ?>
      </b>
    <hr>
    </a>

      </div>

     
     
      
    </div>
        
      <?php }
     
    // if(mysqli_num_rows($result) > 0){
     
    // }
    ?>
    </div>


</div>


</div>


    
</body>
</html>