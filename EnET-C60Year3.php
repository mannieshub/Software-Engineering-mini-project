<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnET C-60 Year 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
      nav{
        background: #EDDCBC;
      }
      button{
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
    </style>
    <script>
      $(function(){
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
                    <a href="homepage.html" style= "background-color: #F1BB93;"class="btn fw-bold text-light" aria-current="page">MainPage</a>
                    <a href="EnET60.html" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 60</a>
                    <a href="EnET65.html" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 65</a>
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
                      <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </nav>-->
  <div id="navbar"></div>
  <form action="CourseDetail.php" method="post">
  <div class="container mt-4 ">
      <div class="row mb-4">
        <div class="col-4"></div>
        <div class="col-4">
          <nav class="navbar rounded-start rounded-end"style="background-color: #F1BB93;" >
            <div class="container-fluid">
              <span class="navbar-brand mb-0 h1">ชั้นปีที่ 3 ภาคการศึกษาที่ 1</span>
            </div>
          </nav>
        </div>
        <div class="col-4"></div>
      </div>

      <div class="row">
        
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513343</h5>
                    <p class="card-text">Computer Network System</p>
                    <a href="#" class="btn"style="background-color: #F1BB93;">Network Security</a>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513346</h5>
                    <p class="card-text">Web Application Development</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513127</h5>
                    <p class="card-text">Computer Architecture</p>
                    
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513243</h5>
                    <p class="card-text">Computer Practice 1</p>
                    <a href="#" class="btn"style="background-color: #F1BB93;">Computer Practice 2</a>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
      </div>
      <div class="row mt-4">
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513348</h5>
                    <p class="card-text">Embedded Control System</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">08XXXXXXX</h5>
                    <p class="card-text">General Education Elective</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">XXXXXXXXX</h5>
                    <p class="card-text">Free Elective Course 1</p>
                    
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              
          </div>
      </div>
  </div>

  <div class="container mt-4 ">
    <div class="row mb-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end"style="background-color: #F1BB93;">
          <div class="container-fluid">
            <center><span class="navbar-brand mb-0">ชั้นปีที่ 3 ภาคการศึกษาที่ 2</span></center>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>
      <div class="row">
          
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513367</h5>
                    <p class="card-text">Network Security</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513145</h5>
                    <p class="card-text">Operating System</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513151</h5>
                    <p class="card-text">Software Engineering</p>
                    
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513185</h5>
                    <p class="card-text">Computer Vision</p>
                    
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
      </div>
      <div class="row mt-4">
          
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513252</h5>
                    <p class="card-text">Computer Engineering Seminar</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513249</h5>
                    <p class="card-text">Computer Practice 2</p>
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">030513347</h5>
                    <p class="card-text">Mobile and Cloud Computing</p>
                    
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
          <div class="col-1">

          </div>
          <div class="col-2">
              <div class="card" style="width: 18rem;">
                  <div class="card-body" style="background-color:#F1EBCC ;">
                    <h5 class="card-title fw-bold">XXXXXXXXX</h5>
                    <p class="card-text">Free Elective Course 2</p>
                    
                    <input type="hidden" name="CourseID" value="030103300">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
          </div>
      </div>
  </div>

  <div class="container mt-4 ">
    <div class="row">
      <div class="col-4">

      </div>
      <div class="col-4">
        <div aria-label="Page navigation example">
          <ul class="pagination justify-content-center pagination-lg">
            <li class="page-item">
              <a class="page-link" href="EnET-C60Year2.php" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="EnET-C60Year1.php">1</a></li>
            <li class="page-item"><a class="page-link" href="EnET-C60Year2.php">2</a></li>
            <li class="page-item disabled"><a class="page-link" href="EnET-C60Year3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="EnET-C60Year4.php">4</a></li>
            <li class="page-item">
              <a class="page-link" href="EnET-C60Year4.php" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </div>
      </div> 
      <div class="col-4"></div>
    </div>
  </div>
</form>
</body>
</html>