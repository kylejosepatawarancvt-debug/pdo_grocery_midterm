<?php
include 'dbconfig.php'; 

try {
    $sql = "DELETE FROM grocery_items WHERE item_id = :id";

    $stmt = $conn->prepare($sql);

    $stmt->execute([':id' => 1]);

    echo "🗑️ Record with ID 1 successfully deleted!";
} catch (PDOException $e) {
    echo "❌ Error deleting record: " . $e->getMessage();
}
?>
