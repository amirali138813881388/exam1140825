CREATE TABLE IF NOT EXISTS products (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
price INT NOT NULL,
type ENUM('book', 'notebook') NOT NULL
);

INSERT INTO products (title, price, type) VALUES
('PHP OOP Guide', 150000, 'book'),
('HTML & CSS Basics', 120000, 'book'),
('Plain Notebook A5', 30000, 'notebook'),
('Grid Notebook A4', 45000, 'notebook');
