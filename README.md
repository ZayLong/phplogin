phplogin
========

A quick example demonstrating a login/register system using PHP/SQL


Run this sQL script to build the database.

```sql
CREATE DATABASE lr;

CREATE TABLE users
(
user_id int NOT NULL AUTO_INCREMENT,
username varchar(32),
password varchar(32),
first_name varchar(32),
last_name varchar(32),
email varchar(255),
active int(11) DEFAULT '1'
PRIMARY KEY (user_id)
)
```
that should be it.
