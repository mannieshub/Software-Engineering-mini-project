<?php
    session_start();
    $CourseID = $_POST['courseID'];
    $conn = new PDO("mysql:host=softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com;
    dbname=SoftwareEngineerPro;charset=utf8", "admin", "Mannies_08");
    $sql = "SELECT * FROM CourseDB where CourseID = '$CourseID'";
    
    // Prepare the query
    $stmt = $conn->prepare($sql);
    
    // Execute the query
    $stmt->execute();
    
    // Fetch all the rows as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Print the results
    foreach ($rows as $row) {
        foreach ($row as $key => $value) {
            echo "$key: $value<br>";
        }
        echo "<br>";
    }
?>
