# api-test
small api service for demonstration

VAZNO ZA ISPRAVAN RAD SA MYSQL BAZOM.
Izvrsiti upite u phpmyadmin-u u SQL jezicku:

  CREATE USER 'myapi'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';
  
  CREATE DATABASE api-test_db;

  GRANT DELETE, INSERT, UPDATE, SELECT ON api-test_db.* TO 'myapi'@'localhost';

  FLUSH PRIVILEGES;

Takodje uvesti bazu sa tabelama iz datoteke api-test_db.sql u Import jezicku phpmyadmin

Za globanlne pogledaj u env.php
