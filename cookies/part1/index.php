<?php

// Cookie expires in a day
$exp = time() + 86400;

setcookie("name","Alex", $exp);
setcookie("age",19,$exp);

echo $_COOKIE['name']." is ".$_COOKIE['age'].'<br>';

print_r($_COOKIE);
?>