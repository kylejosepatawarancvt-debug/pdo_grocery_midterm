<?php
include 'dbconfig.php'; 

try {
    $sql = "INSERT INTO grocery_items (item_name, category, quantity, price)
            VALUES (:item_name, :category, :quantity, :price)";

    $stmt = $conn->prepare($sql);

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
