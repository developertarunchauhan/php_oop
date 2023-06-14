use `php_oop_db`;

-- CREATE TABLE `students` (
-- 	id INT NOT NULL UNIQUE,
--     name VARCHAR(50) NOT NULL,
--     age INT NOT NULL,
--     gender VARCHAR(10) NOT NULL,
--     city VARCHAR(10) NOT NULL,
--     PRIMARY KEY(id)
-- );

SELECT * FROM `students`;

INSERT INTO `students` (id,name,age,gender,city) 
VALUES (4,"Arun Chauhan",30,"Male","Shimla");