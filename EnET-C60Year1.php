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
<div id="navbar"></div>
<form action="testDetailForm.php" method="post">
<div class="container mt-4 ">
  
    <div class="row mb-4">
      <div class="col-4"></div>
      <div class="col-4">
        <nav class="navbar rounded-start rounded-end"style="background-color: #F1BB93;" >
          <div class="container-fluid">
            <span class="navbar-brand mb-0 h1 text-dark">ชั้นปีที่ 1 ภาคการศึกษาที่ 1</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>

    <div class="row">
    <div class="col-2">
      
        <div class="card" style="width: 18rem;">
          <div class="card-body" style="background-color:#F1EBCC ;">
            <h5 class="card-title fw-bold">030103300</h5>
            <p class="card-text">Engineering Drawing</p>
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
                  <h5 class="card-title fw-bold">030513300</h5>
                  <p class="card-text">Computer Programming</p>
                  <input type="hidden" name="CourseID" value="030513300">
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
                  <h5 class="card-title fw-bold">040203111</h5>
                  <p class="card-text">Engineering Mathematics 1</p>
                  <input type="hidden" name="CourseID2" value="040203112"> 
                  <button type="submit" class="btn" style="background-color: #F1BB93;">Engineer Math 2</button>


                  <input type="hidden" name="CourseID" value="040203112">
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
                  <h5 class="card-title fw-bold">040313007</h5>
                  <p class="card-text">Physics 1</p>
                  
                  <a href="#" class="btn"style="background-color: #F1BB93;">Physics 2</a>
                  
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
                  <h5 class="card-title fw-bold">040313006</h5>
                  <p class="card-text">Physics Laboratory 1</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Physics Lab 2</a>
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
                  <h5 class="card-title fw-bold">04XXXXXXX</h5>
                  <p class="card-text">Sci. and Math. Elective</p>
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
                  <h5 class="card-title fw-bold">0801030XX</h5>
                  <p class="card-text">Language Elective Course 1</p>
                  
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
                  <h5 class="card-title fw-bold">0803035XX</h5>
                  <p class="card-text">Physical Education Elective</p>
                  
                  <input type="hidden" name="CourseID" value="030103300">
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
      <nav class="navbar rounded-start rounded-end"style="background-color: #F1BB93;">
        <div class="container-fluid">
          <center><span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 1 ภาคการศึกษาที่ 2</span></center>
        </div>
      </nav>
    </div>
    <div class="col-4"></div>
  </div>
    <div class="row">
        
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030413100</h5>
                  <p class="card-text">Electric Circuit Analysis 1</p>
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
                  <h5 class="card-title fw-bold">030513122</h5>
                  <p class="card-text">Discrete Mathematics</p>
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
                  <h5 class="card-title fw-bold">040203112</h5>
                  <p class="card-text">Engineering Mathematics 2</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Engineer Math 3</a>
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
                  <h5 class="card-title fw-bold">040313007</h5>
                  <p class="card-text">Physics 2</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Physics 3</a>
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
                  <h5 class="card-title fw-bold">040313015</h5>
                  <p class="card-text">Physics Laboratory 2</p>
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
                  <h5 class="card-title fw-bold">030513322</h5>
                  <p class="card-text">Object-Oriented Programming</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Data Structure</a>
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
                  <h5 class="card-title fw-bold">0801030XX</h5>
                  <p class="card-text">Language Elective Course 2</p>
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
                  <h5 class="card-title fw-bold">0803035XX</h5>
                  <p class="card-text">Physical Education Elective</p>
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
    <div class="col-4"></div>
  </div>
</div>
</form>
</body>
</html>