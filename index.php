<?php
session_start(); // Start the session

// Check if the user is logged in
if(!isset($_SESSION['student'])){
  header("Location: login.php");
  exit();
}

// Check the user's role
if($_SESSION['role'] == "Student"){
  // Display content for users
  echo "Welcome, student! This is the user homepage.";
  header("Location: homepage.php");
  exit();
} elseif($_SESSION['role'] == "Admin"){
  // Display content for admins
  echo "Welcome, admin! This is the admin homepage.";
  header("Location: homepage.php");
  exit();
}else{
  header("Location: login.php");
  exit();
}
?>
