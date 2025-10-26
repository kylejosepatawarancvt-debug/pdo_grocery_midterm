<?php
include 'dbconfig.php'; // Connect to database

try {
    // Prepare a DELETE statement using a placeholder
    $sql = "DELETE FROM grocery_items WHERE item_id = :id";

    // Prepare the query for execution
    $stmt = $conn->prepare($sql);

    // Execute with the ID you want to delete (change the number if needed)
    $stmt->execute([':id' => 1]);

    echo "🗑️ Record with ID 1 successfully deleted!";
} catch (PDOException $e) {
    echo "❌ Error deleting record: " . $e->getMessage();
}
?>
