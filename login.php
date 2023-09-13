<?php
session_start();

if($_SESSION){
 header('location:index.php');
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
    <title>Login</title>
<?php

include('include/login-header.php');
?>

    
<div class="main row mt-5 shadow ">
    <div class="col-sm-6 d-none d-sm-block">
    <img src="img/admin.png" alt="" class = "">    
<p>Admin Login in Section</p>    
</div>

    <div class="login col-sm-6 mt-5 pt-3">
        <h3>Login</h3>
        <hr>
    <form action="login.php" class="form-group" method ="POST">
<div>
    <label for="Username">Username</label>
    <input type="text" class="form-control" name ="username">
</div>

<div>
    <label for="Password">Password</label>
    <input type="password" class="form-control" name ="password">
</div>
<div class  = "mt-5">
    <button class ="btn btn-primary"  name = "login" type ="submit">Submit</button>
</div>

</form>

    </div>
    

<?php


if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // echo $username ;


    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($con, $query);
      $row = mysqli_fetch_assoc($result);


      $db_name = $row['name'];
     $db_username = $row['username'];
     
      echo $db_name ;
      echo $db_username ;

        // set session
        $_SESSION["username"] = $db_username ;
        $_SESSION["name"] = $db_name ;
        $_SESSION["food"] = "Rice and Beans";


      if( $row = mysqli_num_rows($result)> 0){
        header('location:index.php');

     

      }
      

}
?>

</div>   
    
</body>
</html>