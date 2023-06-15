use `php_oop_db`;

-- CREATE TABLE `students` (
-- 	id INT NOT NULL UNIQUE,
--     name VARCHAR(50) NOT NULL,
--     age INT NOT NULL,
--     gender VARCHAR(10) NOT NULL,
--     city VARCHAR(10) NOT NULL,
--     PRIMARY KEY(id)
-- );
-- 
-- SELECT * FROM `students`;
-- 
-- INSERT INTO `students` (id,name,age,gender,city) 
-- VALUES (4,"Arun Chauhan",30,"Male","Shimla");
-- 
-- create table `users` (
-- 	id INT not null unique auto_increment,
-- 	name varchar(50) not null,
-- 	email varchar(50) not null,
-- 	password varchar(255) not null,
-- 	role varchar(10) not null,
-- 	primary key(id)	
-- )

-- insert into `users` (id, name ,email, password, role)
-- values (1,"Tarun Chauhan", "tarun@gmail.com","tarun@123",'admin');



-- show tables from php_oop_db like 'users';


-- drop table users;

select * from users;

-- update users set name = 'Tarun' where id = 18;
