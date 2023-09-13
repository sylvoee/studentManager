<?php
session_start();
if(!$_SESSION){
 header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/admin.png">
    <script 
      src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js">
    </script>
    <title>Report</title>
<?php

include('include/header.php');
// fetch a single person record

?>

    
<div class="main row mt-5 col-sm-10 mx-2 shadow p-4">
   
    <h3 class="h3 text-center text-info"> <a href = "profile.php?q= <?php echo $_GET['q']; ?> " class="text-decoration-none"><?php echo $_GET['n'];?> Report  <i class="fa fa-file"></i></a></h3>
<div class="cols-sm-12 report-form">
   

<form action="" method = "POST" class = "form-group">
<div>
    <input type="hidden" class="form-control" placeholder ="title" name ="user_id" value="">
</div>
<div>
    <input type="hidden" class="form-control" placeholder ="title" name ="student_id" value="<?php echo $_GET['q'];?>">
</div>

<div>
    <input type="text" class="form-control" placeholder ="title" name ="title" required>
</div>
<div>

    <textarea id="editor" name="report" id="" rows="10" style="width:100%;" placeholder= "Make Report Here"></textarea>
</div>
    <button class ="btn btn-primary mt-5" type ="submit" name = "click_report">Submit Report</button>
</form>


<?php
// Processing submit report

if(isset($_POST['click_report'])){

include('include/connection.php');

// echo "You click me" ;


  $student_id = $_POST['student_id'];
  $user_id = $_POST['user_id'];
  $title = $_POST['title'];
  $report = $_POST['report'];

  echo $tudent_id ;

  $sql = "INSERT INTO report_tbl (student_id, user_id, title, report, time) VALUES ('$student_id','0', '$title', '$report', NOW())";
if(mysqli_query($con, $sql)){
    echo "Report has been made successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    echo "invalid data, post failed" ;
}
 

    
// $qReport = "INSERT INTO report_tbl(student_id, user_id, title, report) VALUES('10' ,'23', 'Hey oh', 'This is my world') "  ;
// $rResult = mysqli_query($con, $qReport) ;
// var_dump($rResult);


}


?>



</div>
</div>
<script>
    // To trigger the text editor
ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>