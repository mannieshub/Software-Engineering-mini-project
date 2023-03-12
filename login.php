<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css">
  

    <style>
     
        function password_show_hide() {
            let x = document.getElementById("password");
            let show_eye = document.getElementById("show_eye");
            let hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if (x.type === "password") {
                x.type = "text";
                show_eye.style.display = "none";
                hide_eye.style.display = "block";
            } else {
                x.type = "password";
                show_eye.style.display = "block";
                hide_eye.style.display = "none";
            }
        }
    </script>
</head>
<style>
    body {
        background:
            #EDDCBC
    }

    @media (min-width: 992px) {
        body {
            background: linear-gradient(to left,
                    #EDDCBC 0%,
                    #EDDCBC 50%,
                    white 50%,
                    white 0%)
        }
    }

    #lable {
        font-family: 'Inter';
        font-style: normal;
        color: #000000;
    }

    .l1 {



        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 77px;
        text-align: center;

        color: #000000;
    }

    .l2 {



        font-family: 'Inter';
        font-style: normal;
        font-weight: 50;
        font-size: 40px;
        line-height: 77px;
        text-align: center;

        color: #000000;

    }

    .l3 {
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 96px;
        line-height: 116px;
        text-align: center;

        color: #000000;

        text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
</style>

<body>
    <h1></h1>
    <form action="verify.php" method="post">
        <div class="container">
            <div class="row  position-absolute top-50 start-50 translate-middle">
                <div class="mb-5 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                    <div class="l1" style="font-size: 32px;">Welcome to</div>
                    <div class="l1" style="font-size: 32px;">your Study Plan!</div>
                </div>

                <div class="col-lg-5">
                    <div class="l3 mb-5 ">Login</div>
                    <?php
                    if (isset($_SESSION["error"]) == 1) {
                    ?>
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Invalid Email or Password!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    <?php
                        unset($_SESSION["error"]);
                    }
                    ?>
                    <div class="text-dark">
                        <div class="row mb-2 ">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <label id="lable" class="col-form-label">Email Address :</label>
                                <input type="email" class="form-control" placeholder="username@email.com" name="email" required>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                        <div class="row mb-5 ">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <label id="lable" class="col-form-label">Password :</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" name="pwd" required id="password">
                                    <span class="input-group-text " onclick="password_show_hide();">
                                        <i class="bi bi-eye-fill" id="show_eye"></i>
                                        <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                    </span>
                                </div>
                            </div>


                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-4 col-12 text-center mb-2">
                                <a href="homepage.php"></a>
                                <button type="submit" class="btn fw-bold text-light w-100" style="background-color: #F1BB93;">Login</button>
                            </div>
                            <div class="col-sm-4 col-12 text-center mb-2">
                                <button type="button" class="btn fw-bold text-light w-100" style="background-color: #F1BB93;">
                                    <a href="register.php" style="color:inherit;text-decoration:none;">Register</a>
                                </button>
                            </div>

                            <div class="col-sm-4 col-12 text-center mb-2">
                                <a href="homepage.php">
                                    <button type="button" class="btn fw-bold text-light w-100" style="background-color: #F1BB93;">Guest</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-5 d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                    <div class="l1">Welcome to </div>
                    <div class="l2">your Study Plan !</div>
                </div>


            </div>
        </div>

    </form>
</body>

</html>