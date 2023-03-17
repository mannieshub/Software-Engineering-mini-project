<?php
session_start();
$comment = $_POST['comment'];
$post_id = $_POST['post_id'];
$user_id = $_SESSION['stdid'];
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";
$conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
$sql = "INSERT INTO teachercomment(TComment,DateTime,stdID,ShortName) VALUES
                                ('$comment',NOW(),'$user_id','$post_id')";
$conn->exec($sql);

// Send the CourseID value back to the testDetailForm.php page as a POST parameter
       // $_POST['CourseID'] = $post_id;
       

    $_SESSION['sbar'] = $post_id;

header("location: testDetailForm.php");
$conn = null;
die();