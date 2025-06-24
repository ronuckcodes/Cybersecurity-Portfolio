CREATE DATABASE multi_login;

USE multi_login;

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    user_type VARCHAR(20) NOT NULL,
    password VARCHAR(100) NOT NULL
);
-- Insert admin user
INSERT INTO users (username, email, user_type, password) 
VALUES ('admin', 'admin@example.com', 'admin', MD5('admin123'));

-- Insert first regular user
INSERT INTO users (username, email, user_type, password) 
VALUES ('john_doe', 'john@example.com', 'user', MD5('user123'));

-- Insert second regular user
INSERT INTO users (username, email, user_type, password) 
VALUES ('jane_smith', 'jane@example.com', 'user', MD5('secure456'));

-- Add more admins
INSERT INTO users (username, email, user_type, password) 
VALUES ('ronuck', 'ronuck@example.com', 'admin', MD5('adminpass1'));

INSERT INTO users (username, email, user_type, password) 
VALUES ('new_admin2', 'admin2@example.com', 'admin', MD5('adminpass2'));

-- Add more regular users
INSERT INTO users (username, email, user_type, password) 
VALUES ('alice', 'alice@example.com', 'user', MD5('alicepass'));

INSERT INTO users (username, email, user_type, password) 
VALUES ('bob', 'bob@example.com', 'user', MD5('bobpass'));
