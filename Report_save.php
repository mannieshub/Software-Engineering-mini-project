<?php
session_start();

$topic = $_POST['topic'];
$courseID = $_POST['CourseID'];
$detail = $_POST['detail'];

try {
    $host = "noteapinun.trueddns.com";
    $dbport = "28502";
    $dbname = "se_db";
    $dbusername = "web";
    $dbpassword = "web1234";
    $conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO AdminDB (Topic, ID, Information) VALUES (:topic, :courseID, :detail)");
    $stmt->bindParam(':topic', $topic);
    $stmt->bindParam(':courseID', $courseID);
    $stmt->bindParam(':detail', $detail);

    $stmt->execute();

    $_SESSION['add_post'] = 'success';
    header("Location: Report.php");
    die();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
