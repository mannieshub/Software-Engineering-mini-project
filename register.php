<?php
// Connection parameters for MySQL database
$servername = "softwareengineer.cbb4idelrr6p.ap-southeast-1.rds.amazonaws.com";  // Replace with your server name
$username = "admin";    // Replace with your MySQL username
$password = "Mannies_08";    // Replace with your MySQL password
$dbname = "SoftwareEngineer{rp";     // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    
    // Prepare SQL statement to insert data into "students" table
    $sql = "INSERT INTO StudentDB (StudentID,StudentName, Email, Password,Role) VALUES ('-','$name', '$email', '$password','')";
    
    // Execute SQL statement
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    // Close database connection
    mysqli_close($conn);
}
?>