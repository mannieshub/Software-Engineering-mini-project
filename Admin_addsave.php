<?php
session_start();
isset($_SESSION['role']) ? $ro = $_SESSION['role'] : $ro = "";
if ($ro != "Admin") {
    header("Location: index.php");
    exit();
}

$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";
$conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
if($_POST['option'] === "coursedb"){
$cid = $_POST['CourseID'];
$cname = $_POST['CourseName'];
$cu = $_POST['Unit'];
$cde = $_POST['CourseDetail'];
unset($_POST['CourseID']);
unset($_POST['CourseName']);
unset($_POST['Unit']);
unset($_POST['CourseDetail']);
$sql = "INSERT INTO coursedb(CourseID,CourseName,Unit,CourseDetail) VALUES
                                ('$cid','$cname','$cu','$cde')";
try{
    $conn->exec($sql);
    }catch(PDOException $e){
        $_SESSION["p_error"] = 1;
        header('Location: '.$_SERVER['HTTP_REFERER']);
        die();
    }
}elseif($_POST['option'] === "teacherdb"){
$sn=$_POST['ShortName'];
$tn=$_POST['TName'];
unset($_POST['ShortName']);
unset($_POST['TName']);
$sql = "INSERT INTO teacherdb(ShortName,TName) VALUES
                                ('$sn','$tn')";
try{
    $conn->exec($sql);
    }catch(PDOException $e){
        $_SESSION["p_error"] = 1;
        header('Location: '.$_SERVER['HTTP_REFERER']);
        die();
    }
}elseif($_POST['option'] === "teacherteach"){
$cid = $_POST['CourseID'];
$sn = $_POST['ShortName'];
unset($_POST['CourseID']);
unset($_POST['ShortName']);
$sql = "INSERT INTO teacherteach(CourseID,ShortName) VALUES
                                ('$cid','$sn')";
try{
$conn->exec($sql);
}catch(PDOException $e){
    $_SESSION["p_error"] = 1;
    header('Location: '.$_SERVER['HTTP_REFERER']);
    die();
}
}
$_SESSION["p_error"] = 0;
$conn = null;
header('Location: '.$_SERVER['HTTP_REFERER']);
die();
?>