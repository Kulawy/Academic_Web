DROP DATABASE IF EXISTS site_users;

CREATE DATABASE site_users;
USE su;
CREATE TABLE accounts
(
   ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   u_login VARCHAR(15) NOT NULL,
   u_password VARCHAR(15) NOT NULL,
   acces INT NOT NULL,
   u_name VARCHAR(21),
   u_lastname VARCHAR(21),
   u_email VARCHAR(30)
);

INSERT INTO accounts (ulogin, upassword) VALUES ('admin', 'admin', 3);
INSERT INTO nazwa_tabeli (...) VALUES (...);
