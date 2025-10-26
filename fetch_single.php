<?php
include 'dbconfig.php'; 

try {
    $stmt = $conn->query("SELECT * FROM grocery_items LIMIT 1");

    $item = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($item);
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
