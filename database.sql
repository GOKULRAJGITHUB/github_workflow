CREATE DATABASE login_demo;
USE login_demo;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255)
);

INSERT INTO users (username, password)
VALUES (
    'admin',
    '$2y$10$wHnH9y8Wb4N9vZQy7KpN3O6X4U/9a8cE2QpL1z3oE1WfZcY4Y2n5e'
);
/* password = admin123 */