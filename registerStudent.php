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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/admin.png">
    <title>Register Student</title>
    
     
<?php

include('include/header.php');
// fetch a single person record

?>

    
<div class="main row mt-5 shadow">
    <div class="col-sm-4 d-none d-sm-block">
    <img src="img/admin.png" alt="" style ="width:80%;">    
<p>Student Registeration Portal</p>    
</div>

    <div class="col-sm-8 mt-5 pt-3">
        <h3>Register Student</h3>
        <hr>
        

        <form action="registerStudent.php" class="form-group registerStudent" id = "registerStudent" method= "POST">
      <div class="row">

    <div class="col-sm-6">
      <label for="forename">forename</label>
      <input type="text" name ="forename" placeholder ="James" class="form-control">
    </div>

    <div class="col-sm-6">
      <label for="surname">surname</label>
      <input type="text" name ="surname" placeholder ="Muhal" class="form-control">
    </div>

    <div class="col-sm-6">
      <label for="Date Of Birth">Date Of Birth</label>
      <input type="date" name ="DOB" class="form-control" required>
    </div>

    <div class="col-sm-6">
      <label for="Email">Email</label>
      <input type="email" name ="email" placeholder ="James@info" class="form-control" required>
    </div>

    <div class="col-sm-6">
      <label for="address">address</label>
      <input type="text" name ="address" placeholder ="123 Kings Park....." class="form-control">
    </div>

    <div class="col-sm-6">
      <label for="Tutor Group">Tutor Group</label>
      <input type="text" name ="tutor" placeholder ="GreatMinds" class="form-control">
    </div>

    <div class="col-sm-6">
      <label for="Phone">Phone Number</label>
      <input type="number" name ="phone" class="form-control" required>
    </div>

    <div class="col-sm-6">
      <label for="Gender">Gender</label>
      <select name="gender" id="" class ="form-control">
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="I prefer not to say">I prefer not to answer</option>
      </select>
    </div>

    <div class="col-sm-6">
     
      <input type="hidden" name ="user_id" class="form-control">
    </div>

    

      </div>


       <div class ="mt-5">
        <button class="btn btn-primary" type = "submit" name = "btn-register">Register</button>
       <button class="btn btn-danger" type = "reset">Reset</button>
       </div>
        </form>

    </div>
    

<?php
if(isset($_POST['btn-register'])){
// To check to see if email address already exist

// $email = $_POST['email'];
// echo $email;
// include('include/connection.php');
//   $query = "SELECT * FROM student_table WHERE email = $email ";
//   $result = mysqli_query($con, $query);
//   $row = mysqli_fetch_assoc($result);
  
// if(mysqli_num_rows($result) > 0){
//   echo "email already exist" ;
// }else{
//   echo "ERROR: Could not able to execute $query. " . mysqli_error($query);
// }
// var_dump($result);

 $surname = $_POST['surname'];
 $forename = $_POST['forename'];
  $DOB = $_POST['DOB'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  $gender = $_POST['gender'];
  $tutor = $_POST['tutor'];
  $email = $_POST['email'];

  echo $tudent_id ;

  $sql = "INSERT INTO student_table(surname, forename, DOB, address, phone, gender, tutor, email, pdf_file, time)
   VALUES('$surname','$forename', '$DOB', '$address', '$phone', '$gender', '$tutor', '$email', '', NOW())";
if(mysqli_query($con, $sql)){
    echo "Student was registered successfully.";
} else{
    // echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    echo "invalid data input, post failed.";
}
 

}
?>

</div>   
    
</body>
</html>