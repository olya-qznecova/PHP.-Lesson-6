CREATE TABLE pictures_table
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40),
    size INT NOT NULL,
    path VARCHAR(150) NOT NULL,
    click INT DEFAULT DEFAULT
);