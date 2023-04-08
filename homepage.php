<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>
    
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

   <!-- <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container-fluid">
          <div class="row">
            <div class="col-1">
              <a class="navbar-brand fw-bold text-light fs-3" href="https://cit.kmutnb.ac.th/">CIT</a>
            </div>
              <div class="col-5 d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
          
              <div class="btn-group">
                <a href="homepage.html" style= "background-color: #F1BB93;"class="btn fw-bold text-light" aria-current="page">MainPage</a>
                <a href="EnET60.html" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 60</a>
                <a href="EnET65.html" style= "background-color: #F1BB93;"class="btn fw-bold text-light">EnET-C 65</a>
              </div>
          
            </div>
            <div class="col-5 d-none d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
              <div class="dropdown">
              <a class="btn dropdown-toggle fw-bold text-light" style="background-color: #F1BB93;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Page
              </a>
              <ul class="dropdown-menu">
                <li><a href="homepage.html" class="dropdown-item">MainPage</a></li>
                <li><a href="EnET60.html" class="dropdown-item">EnET-C 60</a></li>
                <li><a href="EnET65.html" class="dropdown-item">EnET-C 65</a></li>
              </ul>
              </div>
            </div>

            <div class="col-5">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="ค้นหาวิชาหรืออาจารย์" aria-label="Search">
                    <button class="btn fw-bold text-light" style = "background-color: #F1BB93;"type="submit">Search</button>
                </form>
            
            </div>
            <div class="col-1 ">
                <div class="dropdown">
                    <a class="btn dropdown-toggle fw-bold text-light" style="background-color: #F1BB93;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Username
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                      <li><a class="dropdown-item" href="#">Report a Problem</a></li>
                      <li><a class="dropdown-item" href="login.html">Logout</a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
    </nav> -->
    
    <div id="navbar" class="mb-3"></div>

    <div class="container">
      <div class="row">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            
          </div>
          <div class="carousel-inner">
         
            <div class="carousel-item active">
              <img src="mans.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2>PONGPISUT PRASRI</h2>
                <h4>PROJECT MANAGER / PROGRAMMER</h4>
                <h5>สุดยอดนักวางกลยุทธ์ผู้ได้รับสมญานามว่าขงเบ๊งแห่งพระนครเหนือ</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="NoteTrue.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2>APINUN UMBRO</h2>
                <h4>PROGRAMMER</h4>
                <h5>สุดยอดโปรแกรมเมอร์มือฉบังแห่งยุคโซชอน</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="GiftUI.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h2>GITTIYAPORN</h2>
                <h4>UX/UI DESIGNER</h4>
                <h5>ผู้เชี่ยวชาญด้านการออกแบบประสบการณ์ของผู้ใช้งาน</h5>
              </div>
            </div>
            <div class="carousel-item">
              <img src="GiftUI.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>PAWARESS JAROONCHAI</h5>
                <p>TESTOR/SYSTEM ANALYSIS</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    
</body>
</html>