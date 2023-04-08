<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EnET C-65 Year 2</title>

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
    .card-text {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .card-text:hover {
      white-space: normal;
      overflow: visible;
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
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 2 ภาคการศึกษาที่ 1</span>
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
            <div class="card-body" style="background-color:#F1EBCC;">
              <h5 class="card-title fw-bold">030513220</h5>
              <p class="card-text">Electronics Practice 1</p>
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="030513220"><!---แก้รหัสของวิชานี้ให้ตรง--->
                <div class="ms-auto">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>



      <div class="col col-12">
        <form action="testDetailForm.php" method="post">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <div>
                <h5 class="card-title fw-bold">030513334</h5>
                <p class="card-text">Digital Circuit and Logic Design</p>
              </div>
              <div class="d-flex justify-content-between align-items-start mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513335">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Microcon sys.</button>
                </form>
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513334">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>
              </div>
            </div>
          </div>
      </div>


      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">040203211</h5>
            <p class="card-text">Engineering Mathematics 3</p>
            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="040203211">
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
            <h5 class="card-title fw-bold">030513100</h5>
            <p class="card-text">Engineering Electronics</p>

            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="030513100">
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
            <h5 class="card-title fw-bold">030513200</h5>
            <p class="card-text">Electronics Laboratory</p>


            <form action="testDetailForm.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">
                <input type="hidden" name="CourseID" value="030513200">
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
            <h5 class="card-title fw-bold">030513322</h5>
            <p class="card-text">Object-Oriented Programming</p>

            <div class="d-flex justify-content-between align-items-end mt-3">
              <form action="testDetailForm.php" method="post">
                <input type="hidden" name="CourseID" value="030513326"><!---แก้รหัสของวิชานี้ให้ตรง--->
                <button type="submit" class="btn" style="background-color: #F1BB93;">
                  Data Structure</button>
              </form>
              <form action="testDetailForm.php" method="post">
                <input type="hidden" name="CourseID" value="030513322">
                <div class="ms-auto">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>


      <div class="col col-12">
        <form action="Elective-Course.php" method="post">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <h5 class="card-title fw-bold">08XXXXXXX</h5>
              <p class="card-text">Social Sci. & Human. Elective Course</p>

              <div class="d-flex justify-content-between align-items-end mt-3">


                <input type="hidden" name="CourseID" value="08XXXXXXX">
                <div class="ms-auto">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </div>

              </div>

            </div>
          </div>
        </form>
      </div>



      <div class="col col-12">
        <div class="card h-100">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">08XXXXXXX</h5>
            <p class="card-text">Social Sci. & Human. Elective Course</p>
            <form action="Elective-Course.php" method="post">
              <div class="d-flex justify-content-between align-items-end mt-3">

                <input type="hidden" name="CourseID" value="08XXXXXXX">
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

    <div class="container mt-4 ">
      <div class="row mb-4">
        <div class="col-4"></div>
        <div class="col-4">
          <nav class="navbar rounded-start rounded-end" style="background-color: #F1BB93;">
            <div class="container-fluid">
              <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 2 ภาคการศึกษาที่ 2</span>
            </div>
          </nav>
        </div>
        <div class="col-4"></div>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

        <div class="col col-12">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <h5 class="card-title fw-bold">030513326</h5>
              <p class="card-text">Data Structure and Algorithm Analysis</p>

              <form action="testDetailForm.php" method="post">
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="030513326">
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
              <div>
                <h5 class="card-title fw-bold">030513335</h5>
                <p class="card-text">Microcontroller Systems</p>
              </div>
              <div class="d-flex justify-content-between align-items-end mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513127">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Com Architec</button>
                </form>


                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513335">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>

              </div>
              <div class="d-flex justify-content-between align-items-end mt-3">


                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513243">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Com Prac 1</button>
                </form>

              </div>
            </div>
          </div>
        </div>
        <div class="col col-12">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <div>
                <h5 class="card-title fw-bold">030513352</h5>
                <p class="card-text">Artificial Intelligence</p>
              </div>
              <div class="d-flex justify-content-between align-items-start mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513906"><!---แก้รหัสของตัวต่อให้ตรง--->
                  <button type="submit" class="btn" style="background-color: #F1BB93;">Machine Learn</button>
                </form>
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513352"><!---แก้รหัสของวิชานี้ให้ตรง--->
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col col-12">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <h5 class="card-title fw-bold">030513903</h5>
              <p class="card-text">Computer Network System and Data Communication</p>


              <div class="d-flex justify-content-between align-items-end mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513904">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Cybersecurity</button>
                </form>

                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513903">
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
              <h5 class="card-title fw-bold">030513333</h5>
              <p class="card-text">Database Design and Applications</p>
              <div class="d-flex justify-content-between align-items-end mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513346">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Web App</button>
                </form>

                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="030513333">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col col-12">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <h5 class="card-title fw-bold">08xxxxxxx</h5>
              <p class="card-text">Language Elective Course 1</p>

              <form action="Elective-Course.php" method="post">
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="08xxxxxxx">
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
              <h5 class="card-title fw-bold">xxxxxxxxx</h5>
              <p class="card-text">Integrated Elective Course</p>

              <form action="Elective-Course.php" method="post">
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="xxxxxxxxx">
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


      <div class="container mt-4 ">
        <div class="row">
          <div class="col-4">

          </div>
          <div class="col-4">
            <div aria-label="Page navigation example">
              <ul class="pagination justify-content-center pagination-lg">
                <li class="page-item">
                  <a class="page-link" href="EnET-C65Year1.php" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item "><a class="page-link" href="EnET-C65Year1.php">1</a></li>
                <li class="page-item disabled"><a class="page-link" href="EnET-C65Year2.php">2</a></li>
                <li class="page-item"><a class="page-link" href="EnET-C65Year3.php">3</a></li>
                <li class="page-item"><a class="page-link" href="EnET-C65Year4.php">4</a></li>
                <li class="page-item">
                  <a class="page-link" href="EnET-C65Year3.php" aria-label="Next">
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