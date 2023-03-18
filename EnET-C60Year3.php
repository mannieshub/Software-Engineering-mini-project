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
  <div id="navbar"></div>
  <div class="container mt-4 ">

    <div class="row mb-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end" style="background-color: #F1BB93;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 3 ภาคการศึกษาที่ 1</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
      </form>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

      <div class="col col-12">
        <form action="testDetailForm.php" method="post">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <h5 class="card-title fw-bold">030513243</h5>
              <p class="card-text">Computer Practice 1</p>
              <div class="d-flex justify-content-between align-items-end mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513249">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Com Prac 2</button>
                </form>

                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513243">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>
              </div>
            </div>
        </form>
      </div>
    </div>
    <div class="col col-12">
      <form action="testDetailForm.php" method="post">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030513127</h5>
            <p class="card-text">Computer Architecture</p>
            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="030513127">
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
          <h5 class="card-title fw-bold">030513348</h5>
          <p class="card-text">Embedded Control System </p>

          <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513348">
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
          <h5 class="card-title fw-bold">030513343</h5>
          <p class="card-text">Computer Network System</p>

          <div class="d-flex justify-content-between align-items-end mt-3">
            <form action="testDetailForm.php" method="post">
              <input type="hidden" name="CourseID" value="030513367">
              <button type="submit" class="btn" style="background-color: #F1BB93;">Net Security</button>
            </form>

            <form action="testDetailForm.php" method="post">
              <input type="hidden" name="CourseID" value="030513343">
              <button type="submit" class="btn" style="background-color: #F1BB93;">
                <i class="bi bi-search"></i>View</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
    <div class="col col-12">
      <div class="card h-100">
        <div class="card-body" style="background-color:#F1EBCC ;">
          <h5 class="card-title fw-bold">030513346</h5>
          <p class="card-text">Web Application Development </p>


          <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513346">
              <div class="ms-auto">
                <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col col-12"><!---ไม่มีข้อมูลในระบบ--->
      <div class="card h-100">
        <div class="card-body" style="background-color:#F1EBCC ;">
          <h5 class="card-title fw-bold">08XXXXXXX</h5>
          <p class="card-text">General Education Elective Course</p>

          <form action="Elective-Course.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="0802039XX">
              <div class="ms-auto">
                <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
              </div>
            </div>
          </form>
          
        </div>
      </div>
    </div>
    <div class="col col-12"><!---ไม่มีข้อมูลในระบบ--->

      <div class="card h-100">
        <div class="card-body" style="background-color:#F1EBCC ;">
          <h5 class="card-title fw-bold">XXXXXXXXX</h5>
          <p class="card-text">Free Elective Course 1</p>
          <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="XXXXXXXXX">
              <div class="ms-auto">
                <button type="submit" class="btn" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
              </div>
            </div>
          </form>
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
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 3 ภาคการศึกษาที่ 2</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030513249</h5>
            <p class="card-text">Computer Practice 2</p>

            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513249">
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
            <h5 class="card-title fw-bold">030513252</h5>
            <p class="card-text">Computer Engineering Seminar </p>

            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513252">
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
            <h5 class="card-title fw-bold">030513151</h5>
            <p class="card-text">Software Engineering</p>

            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513151">
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
            <h5 class="card-title fw-bold">030513145</h5>
            <p class="card-text">Operating System </p>

            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513145">
              <div class="ms-auto">
              <button type="submit" class="btn" style="background-color: #F1BB93;">
                <i class="bi bi-search"></i>View</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030513367</h5>
            <p class="card-text">Network Security</p>

            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513367">
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
            <h5 class="card-title fw-bold">030513347</h5>
            <p class="card-text">Mobile and Cloud Computing</p>



            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513347">
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
            <h5 class="card-title fw-bold">030513185</h5>
            <p class="card-text">Computer Vision</p>

            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="030513185">
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
            <h5 class="card-title fw-bold">XXXXXXXXX</h5>
            <p class="card-text">Free Elective Course 2</p>
            <form action="testDetailForm.php" method="post">
            <div class="d-flex justify-content-between align-items-end mt-3">
              <input type="hidden" name="CourseID" value="XXXXXXXXX">
              <div class="ms-auto">
              <button type="submit" class="btn" style="background-color: #F1BB93;">
                <i class="bi bi-search"></i>View</button>
                </div>
              </div>
            </form>
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