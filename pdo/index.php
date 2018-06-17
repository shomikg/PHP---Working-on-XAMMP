<?php

ini_set('display_errors','On');

try {
    $dp = new PDO('mysql:host=127.0.0.1;dpname=pdo','root','');
}
catch(PDOException $e)
{
    var_dump($e->getMessage());
    die('Site is down.');
}

?>