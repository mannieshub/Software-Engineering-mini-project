<?php
// Starting a PHP session
session_start();


// Establishing a database connection
$conn = new PDO("mysql:host=softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com;
    dbname=SoftwareEngineerPro;charset=utf8","admin","Mannies_08");

// Handling the login request

  isset($_POST['email']) ? $u = $_POST['email'] : $u = "";
  isset($_POST['pwd']) ? $p = $_POST['pwd'] : $p = "";
  $shapass = sha1($p);
  $query = "SELECT * FROM StudentDB WHERE Email='{$u}' AND Password='{$shapass}'";
  $result = $conn->query($query);
  if($result->rowCount()==1){
    // Valid login credentials
    $data=$result->fetch(PDO::FETCH_ASSOC);
    $_SESSION['stdid'] = $data["StudentID"];
    $_SESSION["username"] = $data["StudentName"];
    $_SESSION["role"] = $data["Role"];
    $_SESSION["id"] = session_id();
    header("Location: homepage.php"); // Redirect to the home page
    die();
  }else{
    $_SESSION["error"] = 1;
    header("Location: login.php");       
    die();
}
$conn=null;
?>