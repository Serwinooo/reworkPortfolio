CREATE DATABASE market;

USE market;

-- Create a products table for storing item information
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL, -- Path to the product image
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
