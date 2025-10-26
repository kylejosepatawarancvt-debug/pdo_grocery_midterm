CREATE DATABASE grocery_db;
USE grocery_db;

CREATE TABLE grocery_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    quantity INT,
    price DECIMAL(10,2),
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO grocery_items (item_name, category, quantity, price) VALUES
('Fresh Milk', 'Dairy', 10, 65.50),
('Brown Eggs', 'Poultry', 24, 7.25),
('Apples', 'Fruits', 15, 35.00),
('Tuna Can', 'Canned Goods', 30, 45.00),
('Detergent', 'Household', 8, 89.75);
