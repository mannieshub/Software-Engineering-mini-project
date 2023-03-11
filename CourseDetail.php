<?php
session_start();
if (isset($_POST['CourseID']) && !empty($_POST['CourseID'])) {
    $CourseID = $_POST['CourseID'];
    $host = "noteapinun.trueddns.com";
    $dbport = "28502";
    $dbname = "se_db";
    $dbusername = "web";
    $dbpassword = "web1234";
    $conn = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
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
