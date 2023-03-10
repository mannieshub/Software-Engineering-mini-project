<?php
session_start(); // Start the session

// Check if the user is logged in
if(!isset($_SESSION['student'])){
  header("Location: login.php");
  exit();
}

// Check the user's role
if($_SESSION['role'] == "student"){
  // Display content for users
  echo "Welcome, student! This is the user homepage.";
} elseif($_SESSION['role'] == "admin"){
  // Display content for admins
  echo "Welcome, admin! This is the admin homepage.";
}
?>
