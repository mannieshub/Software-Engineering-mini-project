<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EnET C-60 Year 2</title>
    
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
            <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 2 ภาคการศึกษาที่ 1</span>
          </div>
        </nav>
      </div>
      <div class="col-4"></div>
    </div>

    <div class="row">
       
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513100</h5>
                  <p class="card-text">Engineering Electronics</p>
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
                  <h5 class="card-title fw-bold">030513200</h5>
                  <p class="card-text">Electronics Laboratory</p>
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
                  <h5 class="card-title fw-bold">040203211</h5>
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
                  <h5 class="card-title fw-bold">030513220</h5>
                  <p class="card-text">Electronics Practice 1</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Elec- Practice 2</a>
                  
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
                  <h5 class="card-title fw-bold">030513334</h5>
                  <p class="card-text">Digital Circuit and Logic Design</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Microcontroller</a>
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
                  <h5 class="card-title fw-bold">030513326</h5>
                  <p class="card-text">Data Structure and Algorithm</p>
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
                  <h5 class="card-title fw-bold">08XXXXXXX</h5>
                  <p class="card-text">Social and Human Elective</p>
                  
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
          <span class="navbar-brand mb-0 text-dark">ชั้นปีที่ 2 ภาคการศึกษาที่ 2</span>
        </div>
      </nav>
    </div>
    <div class="col-4"></div>
  </div>
    <div class="row">
        
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">030513123</h5>
                  <p class="card-text">Data Communication</p>
                  
                  <a href="#" class="btn"style="background-color: #F1BB93;">Computer Network</a>
          
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
                  <h5 class="card-title fw-bold">030513333</h5>
                  <p class="card-text">Database and Data Technology</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Web Application</a>
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
                  <h5 class="card-title fw-bold">030513352</h5>
                  <p class="card-text">Artificial Intelligence</p>
                  
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
                  <h5 class="card-title fw-bold">030513221</h5>
                  <p class="card-text">Electronics Laboratory 2</p>
              
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
                  <h5 class="card-title fw-bold">030513335</h5>
                  <p class="card-text">Microcontroller Systems</p>
                  <a href="#" class="btn"style="background-color: #F1BB93;">C-Architecture</a>
                  <a href="#" class="btn"style="background-color: #F1BB93;">Embed-CS</a>
                  <a href="#" class="btn mt-3"style="background-color: #F1BB93;">C- Practice 1</a>

                  <input type="hidden" name="CourseID" value="030103300">
                  <button type="submit" class="btn mt-3" style="background-color: #F1BB93;">
                  <i class="bi bi-search"></i>View</button>
                </div>
              </div>
        </div>
        <div class="col-1">

        </div>
        <div class="col-2">
            <div class="card" style="width: 18rem;">
                <div class="card-body" style="background-color:#F1EBCC ;">
                  <h5 class="card-title fw-bold">08010301X</h5>
                  <p class="card-text">Language Elective Course 3</p>
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
            <a class="page-link" href="EnET-C60Year1.php" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link" href="EnET-C60Year1.php">1</a></li>
          <li class="page-item disabled"><a class="page-link" href="EnET-C60Year2.php">2</a></li>
          <li class="page-item"><a class="page-link" href="EnET-C60Year3.php">3</a></li>
          <li class="page-item"><a class="page-link" href="EnET-C60Year4.php">4</a></li>
          <li class="page-item">
            <a class="page-link" href="EnET-C60Year3.php" aria-label="Next">
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