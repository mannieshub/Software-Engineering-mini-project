<?php
    session_start();
    $stdID = $_POST["stdID"]; 
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["pwd"];
    $conn = new PDO("mysql:host=softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com;
    dbname=SoftwareEngineerPro;charset=utf8","admin","Mannies_08");
    $password = sha1($password);
    $sql = "SELECT * FROM StudentDB where StudentID = '$stdID'";
    $result = $conn->query($sql);
    if($result->rowCount()==1){
        $_SESSION["add_login"] = "error";
    }
    else{
         $sql1 = "INSERT INTO StudentDB(StudentID,Email,StudentName,Password,role) 
         VALUES ('$stdID','$email','$username','$password','student')";
         $conn->exec($sql1);
         $_SESSION["add_login"] = "success";
    }
    $conn = null;
    header("location:index.php");
    die();
?>