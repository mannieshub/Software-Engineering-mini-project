<?php
// Connection parameters for MySQL database
$servername = "softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com";  // Replace with your server name
$username = "admin";    // Replace with your MySQL username
$password = "Mannies_08";    // Replace with your MySQL password
$dbname = "SoftwareEngineerPro";     // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    
    // Prepare SQL statement to insert data into "students" table
    $sql = "INSERT INTO StudentDB (StudentID,StudentName, Email, Password,Role) VALUES ('-','$name', '$email', '$password','')";
    
    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close database connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="navbar.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script >
        function password_show_hide(){
            let x = document.getElementById("password");
            let show_eye = document.getElementById("show_eye");
            let hide_eye = document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if(x.type ==="password"){
                x.type="text";
                show_eye.style.display="none";
                hide_eye.style.display="block";
            }else{
                x.type="password";
                show_eye.style.display="block";
                hide_eye.style.display="none";
            }
        }
    </script>
</head>
<style>
    body{
        background: 
            #EDDCBC 
    }
    @media (min-width: 992px) {  
    body{
        background: linear-gradient(
            to right,
            #EDDCBC 0%,
            #EDDCBC 50%,
            white 50%,
            white 0%
        )
    }
}

    #lable{
        font-family: 'Inter';
        font-style: normal;
        color: #000000;
    }
    .l1{
        
        

        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 77px;
        text-align: center;

        color: #000000;
    }
    .l2{
        


font-family: 'Inter';
font-style: normal;
font-weight: 50;
font-size: 40px;
line-height: 77px;
text-align: center;

color: #000000;

    }
    .l3{
       


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
    
    <div class="container">
    <div class="row position-absolute top-50 start-50 translate-middle">
        <div class="col-lg-5 d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
            <div class="l1">Hello Friend</div>
            <div class="l2">Enter your personal details and start journey with us</div>
        </div>
        <div class="mb-5 text-center d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
            <div class="l1" style="font-size: 32px;">Hello Friend</div>
            <div class="l1" style="font-size: 32px;">Enter your personal details</div>
            
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-5 ">
            <form action="register_save.php" method="post">
                
            <div class="l3 mb-5">Register</div>
            <div class="text-dark" >
                    <div class="text-dark" >
                        <div class="row mb-2 " id="lable">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <label id="lable" class="col-form-label">StudentID :</label>
                                <input type="text" class="form-control" placeholder="Ex : 63030xxxxxxxx" name="stdID" required>
                            </div>
                        <div class="col-lg-1"></div>
                    </div>
                
                    <div class="row mb-2 " id="lable">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-10">
                            <label id="lable" class="col-form-label">Username :</label>
                            <input type="text" class="form-control" placeholder="Ex : Many John" name="name" required>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
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
                                <input type="password" class="form-control"  name="pwd" required id="password">
                                <span class="input-group-text " onclick="password_show_hide();">
                                    <i class="bi bi-eye-fill" id="show_eye"></i>
                                    <i class="bi bi-eye-slash-fill d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2 " id="lable">
                        <div class="col-lg-2 col-1"></div>
                        <div class="col-lg-3 col-4"><button type="submit" class="btn fw-bold text-light"style= "background-color: #F1BB93;">Register</button>
                        </div>
                        <div class="col-lg-2 col-1"></div>
                        
                        <div class="col-lg-5 col-6">
                        <a href="login.html"><button type="button" class="btn fw-bold text-light"style= "background-color: #F1BB93;">Login</button></a></div>
                        
                    </div>
            </form>
            </div>
        </div>
        
    </div>
</div>
</body>
</html>