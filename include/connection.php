
<?php
$host = 'localhost';
$user = '';
$password = '';
$database = '';

$con = mysqli_connect($host, $user, $password, $database);

if (!$con){
    ?>
        <script>alert("Connection Unsuccessful!!!");</script>
    <?php
}
