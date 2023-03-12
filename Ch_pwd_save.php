<?php
session_start();
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";

// establish database connection
$pdo = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);

$stdid = $_SESSION['stdid'];
$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirm_new_password = $_POST['confirm_new_password'];

$sql = "SELECT * FROM studentdb WHERE stdID = :stdid";
$statement = $pdo->prepare($sql);
$statement->execute(array(':stdid' => $stdid));
$row = $statement->fetch(PDO::FETCH_ASSOC);
$stored_password = $row['Password'];

// Check if the stored password matches the input password
if (sha1($current_password) == $stored_password) {
    // Check if the new password and confirm password fields match
    if ($new_password == $confirm_new_password) {
        // Check if the new password is different from the current password
        if (sha1($new_password) != $stored_password) {
            // Update the password in the database
            $hashed_password = sha1($new_password);
            $update_sql = "UPDATE studentdb SET Password = :password WHERE stdID = :stdid";
            $update_statement = $pdo->prepare($update_sql);
            $update_statement->execute(array(':password' => $hashed_password, ':stdid' => $stdid));
            $_SESSION['p_error'] = 0; // success
        } else {
            $_SESSION['p_error'] = 3; // new password is same as current password
        }
    } else {
        $_SESSION['p_error'] = 1; // new password and confirm password don't match
    }
} else {
    $_SESSION['p_error'] = 2; // current password is incorrect
}

$pdo = null;
header("location:Ch_pwd.php");
die();
?>
