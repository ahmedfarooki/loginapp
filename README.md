README.md

Story of the login script

Example of a very simple login script (not necessarily secure) for my cousin Ammaar to learn.


TODO:
- Create a table for users CREATE TABLE users(id unsigned int PRIMARY KEY AUTO_INCREMENT, username varchar(25), password varchar(100), created_datetime datetime, UNIQUE KEY(username)) ENGINE=Innodb charset=utf8;
- Verify user credentials with database instead of hardcoding it
- Create a User class in /lib/User.php and include it into login.php
- Save the session in a cookie
- Password encryption with a salt
- Create proper session handling, with a mysql database

