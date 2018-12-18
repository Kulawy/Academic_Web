DROP DATABASE IF EXISTS site_users;

CREATE DATABASE site_users;
USE site_users;
CREATE TABLE accounts
(
   ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
   u_login VARCHAR(15) NOT NULL UNIQUE,
   u_password VARCHAR(15) NOT NULL,
   acces INT NOT NULL,
   u_name VARCHAR(21),
   u_lastname VARCHAR(21),
   u_email VARCHAR(30)
);

INSERT INTO accounts (u_login, u_password, acces) VALUES ('admin', 'admin', 3);

--TAMPLATE
--INSERT INTO nazwa_tabeli (...) VALUES (...);
