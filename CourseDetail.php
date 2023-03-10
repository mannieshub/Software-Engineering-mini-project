<?php
    session_start();
    if (isset($_POST['CourseID']) && !empty($_POST['CourseID'])) {
        $CourseID = $_POST['CourseID'];
        $conn = new PDO("mysql:host=softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com;dbname=SoftwareEngineerPro;charset=utf8", "admin", "Mannies_08");
        $sql = "SELECT * FROM CourseDB WHERE CourseID = :CourseID";

        // Prepare the query
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':CourseID', $CourseID, PDO::PARAM_STR);
        
        // Execute the query
        $stmt->execute();
        
        // Fetch the row as an associative array
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            // Print the results
            foreach ($row as $key => $value) {
                echo "$key: $value<br>";
            }
        } else {
            echo "No course found with CourseID = $CourseID";
        }
    } else {
        echo "CourseID is not set or is empty.";
    }
?>
