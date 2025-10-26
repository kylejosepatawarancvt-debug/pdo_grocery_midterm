<?php
include 'dbconfig.php'; // Connect to database

try {
    // Select only one record (the first item)
    $stmt = $conn->query("SELECT * FROM grocery_items LIMIT 1");

    // fetch() gets just one row from the result set
    $item = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($item);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
