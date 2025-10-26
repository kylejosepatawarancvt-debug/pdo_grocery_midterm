<?php
include 'dbconfig.php'; 

try {
    $stmt = $conn->query("SELECT * FROM grocery_items");

    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>"; 
    print_r($items);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
