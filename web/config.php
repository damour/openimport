<?php

ORM::configure('mysql:host=localhost;dbname=blesko.com');
ORM::configure('username', 'root');
ORM::configure('password', '13579');
ORM::configure('driver_options', [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);