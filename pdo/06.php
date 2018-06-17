<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

$updateUser = $db->query("
	UPDATE users
	SET last_name = 'Smith'
	WHERE id = 1
");

var_dump($updateUser);