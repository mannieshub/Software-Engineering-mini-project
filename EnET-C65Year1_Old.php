<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EnET C-65 Year 1</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    nav {
      background: #EDDCBC;
    }

    button {
      background: #F1BB93;
    }

    .sidebar {
      background-color: #EDDCBC;
      height: 100%;
      position: fixed;
      top: 0;
      left: 0;
      overflow-x: hidden;
      padding-top: 60px;
    }

    .main-content {
      margin-left: 200px;
      padding: 20px;
    }

    .navbar.rounded-start {
      height: 60px;
    }

    .navbar-brand.text-dark {
      position: absolute;
      left: 50%;
      transform: translateX(-50%);
    }
  </style>
  <script>
    $(function() {
      $("#navbar").load("nav_page.php");
    });
  </script>
</head>

<body>
  <!--<nav class="navbar shadow-sm">
        <div class="container">
          <a class="navbar-brand fw-bold text-light fs-3" href="https://cit.kmutnb.ac.th/">CIT</a>
            <div class="col-3">
                <div class="btn-group">
                    <a href="homepage.php" style= "background-color: #F1BB93;"class="btn fw-bold text-light" aria-current="page">MainPage</a>
                    <a href="EnET60.php" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 60</a>
                    <a href="EnET65.php" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 65</a>
                  </div>

          
            </div>
            <div class="col-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="EnET-C 60 Year 1" aria-label="Search">
                    <button class="btn fw-bold text-light" style = "background-color: #F1BB93;"type="submit">Search</button>
                </form>
            
            </div>
            <div class="col-3">
                <div class="dropdown">
                    <button class="btn dropdown-toggle fw-bold text-light" style="background-color: #F1BB93;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Username
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                      <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                      <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </nav>-->
  <div id="navbar"></div>
  <div class="container mt-4 ">
    <div class="row mb-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end" style="background-color: #F1BB93;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 1 ภาคการศึกษาที่ 1</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030103300</h5>
            <p class="card-text">Engineering Drawing</p>
            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="030103300">
                <div class="ms-auto">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030513900</h5>
            <p class="card-text">Computer Programming</p>
            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="030513900">
                <div class="ms-auto">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040203111</h5>
            <p class="card-text">Engineering Mathematics I</p>
            <div class="d-flex justify-content-between align-items-end mt-3">
              <form action="testDetailForm.php" method="post">
                <input type="hidden" name="CourseID" value="040203111">
                <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
              </form>
            </div>

            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="040203111">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">Eng. Math II</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040313005</h5>
            <p class="card-text">Physics I</p>
            <a href="#" class="btn" style="background-color: #F1BB93;">Physics II</a>
            <a href="#" class="btn" style="background-color: #F1BB93;">Physics Laboratory II</a>
            <input type="hidden" name="CourseID" value="040313005">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040313006</h5>
            <p class="card-text">Physics Laboratory I</p>
            <a href="#" class="btn" style="background-color: #F1BB93;">Physics II</a>
            <input type="hidden" name="CourseID" value="040313006">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">080103001</h5>
            <p class="card-text">English I</p>
            <a href="#" class="btn" style="background-color: #F1BB93;">English II</a>
            <input type="hidden" name="CourseID" value="080103001">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">04xxxxxxx</h5>
            <p class="card-text">Sci. & Math Elective Course</p>

            <input type="hidden" name="CourseID" value="04xxxxxxx">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">08xxxxxxx</h5>
            <p class="card-text">Sport & Recreation Elective Course I</p>

            <input type="hidden" name="CourseID" value="08xxxxxxx">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4 ">
    <div class="row mb-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end" style="background-color: #F1BB93;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 1 ภาคการศึกษาที่ 2</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030413100</h5>
            <p class="card-text">Electric Circuit Analysis I</p>
            <input type="hidden" name="CourseID" value="030413100">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030513122</h5>
            <p class="card-text">Discrete Mathematics</p>
            <input type="hidden" name="CourseID" value="030513122">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030513800</h5>
            <p class="card-text">Software Development Practice</p>

            <input type="hidden" name="CourseID" value="030513800">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040203112</h5>
            <p class="card-text">Engineering Mathematics II</p>
            <a href="#" class="btn" style="background-color: #F1BB93;">Engineering Mathematics III</a>
            <input type="hidden" name="CourseID" value="040203112">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040313007</h5>
            <p class="card-text">Physics II</p>
            <input type="hidden" name="CourseID" value="040313007">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040313015</h5>
            <p class="card-text">Physics Laboratory II</p>
            <input type="hidden" name="CourseID" value="040313015">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">080103002</h5>
            <p class="card-text">English II</p>
            <input type="hidden" name="CourseID" value="080103002">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">08xxxxxxx</h5>
            <p class="card-text">Sport & Recreation Elective Course II</p>
            <input type="hidden" name="CourseID" value="08xxxxxxx">
            <button type="submit" class="btn" style="background-color: #F1BB93;">
              <i class="bi bi-search"></i>View</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mt-4 ">
    <div class="row ">
      <div class="col-4">

      </div>
      <div class="col-4">
        <div aria-label="Page navigation example">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="EnET-C65Year1.php">1</a></li>
            <li class="page-item"><a class="page-link" href="EnET-C65Year2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="EnET-C65Year3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="EnET-C65Year4.php">4</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-4"></div>
    </div>
  </div>

</body>

</html>