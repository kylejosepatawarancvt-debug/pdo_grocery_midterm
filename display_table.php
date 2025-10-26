<?php
include 'dbconfig.php'; 

try {
    $stmt = $conn->query("SELECT * FROM grocery_items ORDER BY item_id ASC");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Grocery Items Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 25px auto;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            border: 1px solid #999;
            padding: 10px;
            text-align: center;
        }
        th {
            background: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>🛒 Grocery Items List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Item Name</th>
            <th>Category</th>
            <th>Quantity</th>
            <th>Price (₱)</th>
            <th>Date Added</th>
        </tr>

        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['item_id']); ?></td>
            <td><?= htmlspecialchars($item['item_name']); ?></td>
            <td><?= htmlspecialchars($item['category']); ?></td>
            <td><?= htmlspecialchars($item['quantity']); ?></td>
            <td><?= number_format($item['price'], 2); ?></td>
            <td><?= htmlspecialchars($item['date_added']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
