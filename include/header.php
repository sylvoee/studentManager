
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link href="style.css" rel="stylesheet">
  
   <!-- Offline bootstrap and font-awesome -->
   
  <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
   <link rel="/stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">

  <link rel="/stylesheet" href="font-awesome/css/all.css">

</head>
<body>

<div class="container">

  <!-- Navbar starts here -->
<div class="navbar">

<nav class="navbar navbar-dark bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"> StudentManager </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header"> 
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Leeman'sStudentManager</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registerStudent.php">Register Student</a>
          </li>
          <details>
          <summary style="list-style:none"><i class="fa fa-user"></i> <?php echo $_SESSION["name"]?></summary>

            <li class="nav-item">
            <a class="nav-link" href="index.php"> <form action="" method="POST"> <button name="logout" class="btn text-light">Logout</button></form> </a>
          <?php
          if(isset($_POST['logout'])){
            session_destroy();
            session_unset();
           
           }
          ?>

          </li>

          </details>
        </ul>
        <form class="d-flex mt-3" role="search" action="index.php" method = "POST">
          <input class="form-control me-2" name = "search" type="search" placeholder="Search books by author, department or title" aria-label="Search">
          <button class="btn btn-success" name = "searchBtn" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

</div>
