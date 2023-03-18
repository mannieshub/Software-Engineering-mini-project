<?php
session_start(); // Start the session

isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";

// Check the user's role
if ($ro == "Student") {
  // Display content for Students
  $r = "[Student] ";
  $u = $_SESSION['username'];
} elseif ($ro == "Admin") {
  // Display content for admins
  $r = "[Admin] ";
  $u = $_SESSION['username'];
} else {
  // Display content for guests
  $r = "[Guest] ";
  $u = "";
}
?>
<!--Icon-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">




<!-- Include jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
  // create search results dropdown and append to search form
  var search_dropdown = $('<div class="dropdown-menu" aria-labelledby="dropdownMenuButton"></div>');
  $('#search-dropdown').append(search_dropdown);

  // listen for keyup event on search input
  $('#search-input').keyup(function() {
    // get search term from input field
    var search_term = $(this).val();

    // make AJAX request to searchsys.php with search term
    $.ajax({
      type: 'POST',
      url: 'searchsys.php',
      data: { sbar: search_term },
      success: function(response) {
        // update search results dropdown with response from PHP script
        search_dropdown.html(response);

        // show/hide search results dropdown based on search term
        if (search_term.length > 0) {
          search_dropdown.show();
        } else {
          search_dropdown.hide();
        }

        // add click event listener to search results
        search_dropdown.find('a').click(function(event) {
          // prevent default link behavior
          event.preventDefault();

          // get CourseID of clicked link
          var course_id = $(this).data('course-id');

          // submit form with CourseID as POST data
          $('<form action="testDetailForm.php" method="post">' +
            '<input type="hidden" name="CourseID" value="' + course_id + '">' +
            '</form>').appendTo('body').submit();

          // hide search results dropdown
          search_dropdown.hide();
        });
      }
    });
  });

  // hide search results dropdown when search input is clicked away from
  $(document).click(function(event) {
    if (!$(event.target).closest('#search-form').length) {
      search_dropdown.hide();
    }
  });
});
</script>






<style>
  nav {
    background-color: #EDDCBC;
    font-size: 20px;
  }

  * {

    font-family: 'Prompt', sans-serif !important;
  }

  .navbar-brand {
    color: white;
  }

  .navbar-brand:hover {
    color: #924D3C;
  }

  .navbar-toggler-icon {
    color: white;
  }

  .nav-link {
    color: white;
  }

  .nav-link:hover {
    color: #924D3C;
  }
</style>

<nav class="navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand fw-bold fs-2" href="https://cit.kmutnb.ac.th/">CIT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item me-lg-2 mb-2">
          <a class="btn fw-bold nav-link" style="background-color: #F1BB93;" aria-current="page" href="homepage.php">Main Page</a>
        </li>
        <?php if ($ro != "") { ?>
          <li class="nav-item me-lg-2 mb-2">
            <a class="btn fw-bold nav-link" style="background-color: #F1BB93;" href="addcourse.php">Add Course</a>
          </li>
        <?php } ?>
        <li class="nav-item me-lg-2 mb-2">
          <a class="btn fw-bold nav-link" style="background-color: #F1BB93;" href="EnET-C60Year1.php">EnET-C 60</a>
        </li>
        <li class="nav-item me-lg-2 mb-2">
          <a class="btn fw-bold nav-link" style="background-color: #F1BB93;" href="EnET-C65Year1.php">EnET-C 65</a>
        </li>
      </ul>
    </div>
    <div class="mx-3">
    
    <form class="d-flex" role="search" id="search-form" action="testDetailForm.php" method="post">
        <div class="input-group">
          <input class="form-control" type="search" placeholder="ค้นหาวิชาหรืออาจารย์" aria-label="Search" name="sbar" id="search-input">
          <button class="btn btn-outline-light" style="background-color: #F1BB93;" type="submit">Search</button>
          
        </div>

      </form>


    </div>
    <div id="search-dropdown" style="position: relative; display: inline-block;">
    
          
  </div>
    <div class="dropdown ">
      <button class="btn dropdown-toggle fw-bold text-light" style="background-color: #F1BB93;" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="userbut">
        <?php echo $r, $u; ?>
      </button>
      <ul class="dropdown-menu " aria-labelledby="userbut">
        <?php if ($ro == "") { ?>
          <li><a class="dropdown-item" href="login.php">Login</a></li>
          <li><a class="dropdown-item" href="register.php">Register</a></li>
        
        <?php  }else { ?>
          <?php  if ($ro == "Admin") { ?>
          <li><a class="dropdown-item" href="AdminPage.php">AdminPage</a></li>
          <?php } ?>
          <li><a class="dropdown-item" href="Profile.php">Edit Profile</a></li>
          <li><a class="dropdown-item" href="Report.php">Report a Problem</a></li>
          <li><a class="dropdown-item" href="Ch_pwd.php">Change Password</a></li>
          <li><a class="dropdown-item" href="logout.php">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>