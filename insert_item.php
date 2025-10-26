<?php
include 'dbconfig.php'; // Connect to database

try {
    // Prepare the SQL INSERT statement with placeholders
    $sql = "INSERT INTO grocery_items (item_name, category, quantity, price)
            VALUES (:item_name, :category, :quantity, :price)";

    // Prepare the query for execution
    $stmt = $conn->prepare($sql);

    // Execute the query with actual values
    $stmt->execute([
        ':item_name' => 'Chocolate Bar',
        ':category' => 'Snacks',
        ':quantity' => 20,
        ':price' => 25.00
    ]);

    echo "✅ New grocery item successfully inserted!";
} catch (PDOException $e) {
    echo "❌ Error inserting record: " . $e->getMessage();
}
?>
