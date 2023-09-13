<?php
session_start();
if(!$_SESSION){
 header('location:login.php');
}

include('include/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>All Students</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="img/admin.png">

  <?php
   include('include/header.php');
    ?>

  <div class="container mt-5">

  <div class="main row">

<h43 class="h4 mt-5">All Students</h3>
<hr class ="primary">
  <div class="search col-sm-12">

<div class="search">

<form class="form-inline pt-2" action="index.php" method = "POST">
<div class="col-sm-9 offset-1">
<input type="text" class="form-control " name = "search" placeholder = "search student by name, email, unique ID,or tutor group">
<button type="submit" name = "searchBtn" class="btn form-control">Search For student</button>
</div>

</form>

<?php
include('include/connection.php');

if(isset($_POST['searchBtn'])){
 $search = $_POST['search'];

//  echo $search ;

 $sub_search = substr($search, 0,3);
 
 $sql = "SELECT * FROM student_table WHERE 
 surname LIKE '$search' OR surname LIKE '%$sub_search%' 
 OR forename LIKE '$search' OR forename LIKE '%$sub_search%' 
 OR tutor LIKE '$search' OR tutor LIKE '%$sub_search%' 
 OR email LIKE '$search' OR email LIKE '%$sub_search%' 
 OR id = '$search' OR id = '%$sub_search%' 
 ";

 $result = mysqli_query($con, $sql);
//  echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);

 // var_dump($result);
  
  if(mysqli_num_rows($result) > 0){ 

    $row = mysqli_fetch_assoc($result) ;

    while($row = mysqli_fetch_assoc($result)){ 
    //   echo $row['surname'] ;
    //   $id = $row['id'];

      echo <<<TEXT
        
<div class = "bg-info display-inline text-center">
<tr><td>{$id}</td><td>{$surname}</td> <td>{$tutor}</td><td>{$email}</td><td><a href = "profile.php?q={$row['id']}" 
class="text-decoration-none">{$row['forename']}'s profile</a></td> </tr>
</div>
      
      
TEXT;


    }
  }
    


}

?>

</div>
</div>

</div>






<div class="all-students col-sm-12">
  
  <?php
  // fetch all students
  $query = "SELECT * FROM student_table ORDER BY time DESC";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  
if(mysqli_num_rows($result) > 0){ ?>
<div style ="overflow-x:auto;">
  <table class="table table-responsive table-hover table-striped all-students">
        <tr class ="bg-primary text-light"><th style = "position: -webkit-sticky; position: sticky; left: 0; width:14%" class ="bg-dark text-white" > ID</th><th class ="bg-dark text-light" style = "position: -webkit-sticky; width:14%; 
position: sticky; left: 7%;">FORENAME</th> <th class = "text-light text-center" style = "width:14%;">TUTOR GROUP</th> <th class = "text-white" style = "width:14%;">EMAIL</th>
<th style = "width:14%;" class ="text-white">VIEW PROFILE</th> <th style = "width:14%;" class ="text-white">SURNAME</th> <th style = "width:14%;" class ="text-white">Registration Date</th></tr>
        <?php
  while($row = mysqli_fetch_assoc($result)){
      
        // var_dump($row['forename']);
        $forename = $row['forename'];
        $surname = $row['surname'];
        $id = $row['id'];
        $address = $row['address'];
        $tutor = $row['tutor'];
        $DOB = $row['DOB'];
        $gender = $row['gender'];
        $phone = $row['phone'];
        $email = $row['email'];
        $pdf_file = $row['pdf_file'];
        $time = $row['time'];


        echo <<<TEXT
        
<tr><td class = "bg-secondary text-light" style = "position: -webkit-sticky; position: sticky; left:0;">{$id}</td><td class ="bg-dark text-light" 
style = "position: -webkit-sticky; position: sticky; left: 7%;">{$surname}</td> <td class ="text-center">{$tutor}</td><td class = "">{$email}</td>
<td class =""><a href = "profile.php?q={$id}" 
class="text-decoration-none">{$forename}'s profile</a href = "profile/{$id}"></td> <td class = "">{$surname}</td> <td class ="">{$time}</td> </tr>
      
      
TEXT;
      
  }


}else{
  echo "This is my world" ;
}
  
  
  
  ?>

</table>
</div>

</div>



</div>
</body>
</html>


  






 
  

  