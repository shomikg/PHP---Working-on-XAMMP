<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$user = $db->query("SELECT * FROM users");

var_dump($user);