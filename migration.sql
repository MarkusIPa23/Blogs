CREATE DATABASE blog;

USE blog;

CREATE TABLE posts (
   id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
   content VARCHAR(1000)
);

INSERT INTO posts 
(content)
VALUES
("Pirmais blog ieraksts"),
("Otrais blog ieraksts");

SELECT * FROM posts;