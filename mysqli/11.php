<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$email = "', 'Hacked', 'Hacked', ''); DROP TABLE topics; --";

$insert = $db->multi_query("
	INSERT INTO users (email, first_name, last_name, created)
	VALUES ('{$email}', 'Alex', 'Garrett', NOW())
");