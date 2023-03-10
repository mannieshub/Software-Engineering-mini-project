<?php
session_start();

$topic = $_POST['topic'];
$courseID = $_POST['CourseID'];
$detail = $_POST['detail'];

try {
    $conn = new PDO("mysql:host=softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com;dbname=SoftwareEngineerPro;charset=utf8", "admin", "Mannies_08");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO AdminDB (Topic, ID, Information) VALUES (:topic, :courseID, :detail)");
    $stmt->bindParam(':topic', $topic);
    $stmt->bindParam(':courseID', $courseID);
    $stmt->bindParam(':detail', $detail);

    $stmt->execute();

    $_SESSION['add_post'] = 'success';
    header("Location: Report.php");
    die();
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>
