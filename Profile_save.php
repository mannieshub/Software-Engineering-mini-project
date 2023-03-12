<?php
session_start();
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";


// establish database connection

    $pdo = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
    
$ss_stdid = $_SESSION['stdid'];
$ss_name = $_SESSION["username"];
$ss_email = $_SESSION["email"];

$name = $_POST["Name"];
$stdid = $_POST["stdid"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];

$shpwd = sha1($pwd);
$sql = "SELECT * FROM studentdb where stdID = '$ss_stdid'";
$result = $pdo->query($sql);
// Check if the query returned any rows
if ($result->rowCount() > 0) {
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $stored_pwd = $row["Password"];

    // Check if the stored password matches the input password
    if ($shpwd == $stored_pwd) {
        // Password is correct, do something here
        if($ss_stdid != $stdid){
            $sql1 = "UPDATE studentdb SET stdID = '$stdid' WHERE stdID = '$ss_stdid'";
            $pdo->exec($sql1);
            $_SESSION['stdid'] = $stdid;
        }
        if($ss_name != $name){
            $sql2 = "UPDATE studentdb SET stdName = '$name' WHERE stdID = '$stdid'";
            $pdo->exec($sql2);
            $_SESSION["username"] = $name;
        }
        if($ss_email != $email){
            $sql3 = "UPDATE studentdb SET Email = '$email' WHERE stdID = '$stdid'";
            $pdo->exec($sql3);
            $_SESSION["email"] = $email;
        }
        $_SESSION["p_error"] = 0;

    } else {
        // Password is incorrect
        $_SESSION["p_error"] = 1;
    }
} else {
    // No rows were returned, handle the error
    $_SESSION["p_error"] = 2;
}
$pdo = null;
header("location:Profile.php");
die();
?>