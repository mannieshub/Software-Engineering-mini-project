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
            <p class="navbar-brand mb-0  text-dark ">ชั้นปีที่ 1 ภาคการศึกษาที่ 1 | 20 หน่วยกิต</p>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
      </form>
    </div>
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">


        <!---อันนี้แก้ให้สวยแล้ว--->
        <div class="col col-12">
          <form action="testDetailForm.php" method="post">
            <div class="card h-100">
              <div class="card-body" style="background-color:#F1EBCC;">
                <h5 class="card-title fw-bold">030103300</h5>
                <p class="card-text">Engineering Drawing</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="030103300">
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
                <h5 class="card-title fw-bold">030513900</h5>
                <p class="card-text">Computer Programming</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="030513900">
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
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <div>
                <h5 class="card-title fw-bold">040203111</h5>
                <p class="card-text">Engineering Mathematics 1</p>
              </div>
              <div class="d-flex justify-content-between align-items-start mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040203112">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">Engineer Math 2</button>
                </form>

                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040203111">
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
              <h5 class="card-title fw-bold">040313005</h5>
              <p class="card-text">Physics 1</p>
              <div class="d-flex justify-content-between align-items-start mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040313007">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    Physics 2</button>
                </form>

                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040313005">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <!---อันนี้แก้ให้สวยแล้ว--->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">
        <div class="col col-12">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC;">

              <div>
                <h5 class="card-title fw-bold">040313006</h5>
                <p class="card-text">Physics Laboratory 1</p>
              </div>
              <div class="d-flex justify-content-between align-items-start mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040313015">
                  <button type="submit" class="btn mt-auto" style="background-color: #F1BB93;">
                    Physics Lab 2</button>
                </form>
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040313006">
                  <button type="submit" class="btn" style="background-color: #F1BB93;">
                    <i class="bi bi-search"></i>View</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col col-12"> <!---ไม่มีข้อมูลในระบบ--->

          <form action="testDetailForm.php" method="post">
            <div class="card ">
              <div class="card-body" style="background-color:#F1EBCC ;">
                <h5 class="card-title fw-bold">04XXXXXXX</h5>
                <p class="card-text">Sci. and Math. Elective</p>
                <div class="d-flex justify-content-between align-items-end mt-3">

                  <input type="hidden" name="CourseID" value="04XXXXXXX">
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






        <div class="col col-12"><!---ไม่มีข้อมูลในระบบ--->
          <form action="Elective-Course.php" method="post">
            <div class="card h-100">
              <div class="card-body" style="background-color:#F1EBCC ;">
                <h5 class="card-title fw-bold">0801030XX</h5>
                <p class="card-text">Language Elective Course 1</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="0801030XX">
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
          <!---ไม่มีข้อมูลในระบบ--->
          <form action="Elective-Course.php" method="post">
            <div class="card h-100">
              <div class="card-body" style="background-color:#F1EBCC ;">
                <h5 class="card-title fw-bold">0803035XX</h5>
                <p class="card-text">Physical Education Elective</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="0803035XX">
                  <div class="ms-auto">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">
                      <i class="bi bi-search"></i>View</button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>

    </div>


    <div class="row my-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end " style="background-color: #F1BB93;">
          <div class="container-fluid">
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 1 ภาคการศึกษาที่ 2</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>


    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

        <div class="col col-12">
          <form action="testDetailForm.php" method="post">
            <div class="card h-100">
              <div class="card-body" style="background-color:#F1EBCC ;">
                <h5 class="card-title fw-bold">030413100</h5>
                <p class="card-text">Electric Circuit Analysis 1</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="030413100">
                  <div class="ms-auto">
                    <button type="submit" class="btn " style="background-color: #F1BB93;">
                      <i class="bi bi-search"></i> View
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
                <h5 class="card-title fw-bold">030513122</h5>
                <p class="card-text">Discrete Mathematics</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="030513122">
                  <div class="ms-auto">
                    <button type="submit" class="btn " style="background-color: #F1BB93;">
                      <i class="bi bi-search"></i> View
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>


        <div class="col col-12">
          <div class="card h-100">
            <div class="card-body" style="background-color:#F1EBCC ;">
              <div>
                <h5 class="card-title fw-bold">040203112</h5>
                <p class="card-text">Engineering Mathematics 2</p>
              </div>
              <div class="d-flex justify-content-between align-items-start mt-3">
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040203211">
                  <button type="submit" class="btn " style="background-color: #F1BB93;">Engineer Math 3</button>
                </form>
                <form action="testDetailForm.php" method="post">
                  <input type="hidden" name="CourseID" value="040203112">
                  <button type="submit" class="btn " style="background-color: #F1BB93;"><i class="bi bi-search"></i> View</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="col col-12">
          <form action="testDetailForm.php" method="post">
            <div class="card h-100">
              <div class="card-body" style="background-color:#F1EBCC ;">
                <h5 class="card-title fw-bold">040313007</h5>
                <p class="card-text">Physics 2</p>
                <div class="d-flex justify-content-between align-items-end mt-3">
                  <input type="hidden" name="CourseID" value="040313007">
                  <div class="ms-auto">
                    <button type="submit" class="btn " style="background-color: #F1BB93;"><i class="bi bi-search"></i> View</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-4">

          <div class="col col-12">
            <form action="testDetailForm.php" method="post">
              <div class="card h-100">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">040313015</h5>
                  <p class="card-text">Physics Laboratory 2</p>
                  <div class="d-flex justify-content-between align-items-end mt-3">

                    <input type="hidden" name="CourseID" value="040313015">
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
                <div>
                  <h5 class="card-title fw-bold">030513322</h5>
                  <p class="card-text">Object-Oriented Programming</p>
                </div>
                <div class="d-flex justify-content-between align-items-start mt-3">
                  <form action="testDetailForm.php" method="post">
                    <input type="hidden" name="CourseID" value="030513326">
                    <button type="submit" class="btn" style="background-color: #F1BB93;">Data Structure</button>
                  </form>

                  <form action="testDetailForm.php" method="post">
                    <input type="hidden" name="CourseID" value="030513322">
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
                  <h5 class="card-title fw-bold">0801030XX</h5>
                  <p class="card-text">Language Elective Course 2</p>
                  <div class="d-flex justify-content-between align-items-end mt-3">
                  <form action="Elective-Course.php" method="post">
                    <input type="hidden" name="CourseID" value="0801030XX">
                    <div class="ms-auto">
                      <button type="submit" class="btn" style="background-color: #F1BB93;">
                        <i class="bi bi-search"></i>View
                      </button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
          </div>

          <div class="col col-12">
              <div class="card h-100">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">0803035XX</h5>
                  <p class="card-text">Physical Education Elective</p>
                  <div class="d-flex justify-content-between align-items-end mt-3">
                  <form action="Elective-Course.php" method="post">
                    <input type="hidden" name="CourseID" value="0803035XX">
                    <div class="ms-auto">
                      <button type="submit" class="btn" style="background-color: #F1BB93;">
                        <i class="bi bi-search"></i>View</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
          </div>



          <div class="container mt-4 ">
            <div class="row">
              <div class="col col-4">

              </div>
              <div class="col col-4">
                <div aria-label="Page navigation example">
                  <ul class="pagination justify-content-center pagination-lg">
                    <li class="page-item">
                      <a class="page-link disabled" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item disabled"><a class="page-link" href="EnET-C60Year1.php">1</a></li>
                    <li class="page-item"><a class="page-link" href="EnET-C60Year2.php">2</a></li>
                    <li class="page-item"><a class="page-link" href="EnET-C60Year3.php">3</a></li>
                    <li class="page-item"><a class="page-link" href="EnET-C60Year4.php">4</a></li>
                    <li class="page-item">
                      <a class="page-link" href="EnET-C60Year2.php" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col col-4"></div>
            </div>
          </div>

</body>

</html>