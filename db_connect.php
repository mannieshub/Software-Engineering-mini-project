<?php
// database configuration
$host = "noteapinun.trueddns.com";
$dbport = "28502";
$dbname = "se_db";
$dbusername = "web";
$dbpassword = "web1234";


// establish database connection
try {
    $pdo = new PDO("mysql:host=$host;port=$dbport;dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}
?>
