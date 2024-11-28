CREATE DATABASE cms;

USE cms;

CREATE TABLE subjects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(255) NOT NULL,
    position INT NOT NULL,
    visible TINYINT(1) DEFAULT 1
);

CREATE TABLE pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject_id INT NOT NULL,
    menu_name VARCHAR(255) NOT NULL,
    position INT NOT NULL,
    visible TINYINT(1) DEFAULT 1,
    content TEXT,
    FOREIGN KEY (subject_id) REFERENCES subjects(id) ON DELETE CASCADE
);

CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL
);
