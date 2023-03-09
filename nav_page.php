<?php
session_start(); // Start the session

isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";

// Check the user's role
if($ro == "Student"){
  // Display content for Students
  $r = "[Student]";
  $u = $_SESSION['username'];
  
} elseif($ro == "admin"){
  // Display content for admins
  $r = "[Admin]";
  $u = $_SESSION['username'];
  
}
else{
  // Display content for guests
  $r = "[Guest]";
  $u = "";
}
?>

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <style>
    nav {
      background-color: #EDDCBC;
      font-size: 20px;
    }
    *{
      
      font-family: 'Inter';
      font-style: normal;
    }
    .navbar-brand {
      color: white;
    }
    .navbar-brand:hover {
      color: blue;
    }
    .navbar-toggler-icon {
      color: white;
    }
    .nav-link {
      color: white;
    }
    .nav-link:hover {
      color: blue;
    }
    
    


  </style>
  
  <nav class="navbar navbar-expand-lg ">
    <div class="container">
        <a class="navbar-brand fw-bold fs-3" href="https://cit.kmutnb.ac.th/">CIT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item me-lg-2 mb-2">
                    <a class="btn fw-bold nav-link" style= "background-color: #F1BB93;" aria-current="page" href="homepage.php">Main Page</a>
                </li>
                <?php if($ro != ""){ ?>
                <li class="nav-item me-lg-2 mb-2">
                    <a class="btn fw-bold nav-link" style= "background-color: #F1BB93;" href="#">Add Course</a>
                </li>
                <?php } ?>
                <li class="nav-item me-lg-2 mb-2">
                    <a class="btn fw-bold nav-link" style= "background-color: #F1BB93;" href="#">หลักสูตร ?</a>
                </li>
            </ul>
        </div>
        <div class="mx-3">
            <form class="d-flex" role="search">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="ค้นหาวิชาหรืออาจารย์" aria-label="Search">
                    <button class="btn btn-outline-light" style="background-color: #F1BB93;" type="submit">Search</button>
                  </div>
            </form>
        </div>
        <div class="dropdown ">
            <button class="btn dropdown-toggle fw-bold text-light" style="background-color: #F1BB93;" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="userbut">
                <?php echo $r,$u; ?>
            </button>
            <ul class="dropdown-menu " aria-labelledby="userbut" >
                <?php if($ro == ""){ ?>
                  <li><a class="dropdown-item" href="login.php">Login</a></li>
                  <li><a class="dropdown-item" href="register.php">Register</a></li>
                <?php } else { ?>
                <li><a class="dropdown-item" href="Profile.html">Edit Profile</a></li>
                <li><a class="dropdown-item" href="Report.html">Report a Problem</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

  