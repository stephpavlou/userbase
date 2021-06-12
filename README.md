# userbase
This is a simple implementation of a userbase in PHP using mySQL. It utilizes PHP data objects and prepared statements to defend against injections. In order to run, this site naturally requires that PHP and mySQL are installed and the following configurations:

1. Create a database named `test_ubase` and a table within that database named `users` with three columns: a username, a password, and a unique UID. This can be accomplished with the following SQL:

```
    CREATE DATABASE test_ubase;
    USE test_ubase;
    CREATE TABLE users (
        username VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL,
        uid PRIMARY KEY AUTO_INCREMENT);
```
2. Note the mySQL user used to create the database above. Then locate the file `/site/php/db.con.php` and edit lines `6` and `7` so that the string values for `$db_usr` and `$db_pass` match the user and password used to create the database. This is necessary for the PHP to be able to reach this required database.
3. Once the previous steps and configurations have been completed, the site can then be hosted locally on a given port, `8000` in this example, by navigating to the site's directory and starting a PHP server from the command line, like so:
```
     php -S localhost:8000
```
