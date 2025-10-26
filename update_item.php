<?php
include 'dbconfig.php'; // connect to the database

try {
    // Prepare an UPDATE statement with placeholders
    $sql = "UPDATE grocery_items SET price = :price WHERE item_id = :id";

    // Prepare the query
    $stmt = $conn->prepare($sql);

    // Execute with actual values
    $stmt->execute([
        ':price' => 99.99, // new price
        ':id' => 2          // ID of the item you want to update (change this if needed)
    ]);

    echo "✅ Record with ID 2 successfully updated!";
} catch (PDOException $e) {
    echo "❌ Error updating record: " . $e->getMessage();
}
?>
