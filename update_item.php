<?php
include 'dbconfig.php';

try {
    $sql = "UPDATE grocery_items SET price = :price WHERE item_id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->execute([
        ':price' => 99.99, 
        ':id' => 2   
    ]);

    echo "✅ Record with ID 2 successfully updated!";
} catch (PDOException $e) {
    echo "❌ Error updating record: " . $e->getMessage();
}
?>
