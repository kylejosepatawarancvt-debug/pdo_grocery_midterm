<?php
// Database connection using PDO
$host = "localhost";
$dbname = "grocery_db";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connected successfully to database!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>

<?php
// Database connection using PDO
$host = "localhost";
$dbname = "grocery_db";
$username = "root";
$password = "";

try {
    // Create PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connected successfully to database!";
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>
