<?php
include 'dbconfig.php'; // connect to the database

try {
    // Run a query to get all items
    $stmt = $conn->query("SELECT * FROM grocery_items");

    // fetchAll() returns an array containing all rows
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>"; // makes the output easier to read
    print_r($items);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
