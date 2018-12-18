DROP USER 'admin'@'localhost';
FLUSH PRIVILEGES;
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT select, insert, update, delete, create, drop, references, EXECUTE ON *.* TO 'admin'@'localhost';

--2nd option
--GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost' IDENTIFIED BY 'admin';

--check grants
SHOW GRANTS FOR 'admin'@'localhost';
