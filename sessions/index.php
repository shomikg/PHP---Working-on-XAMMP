<?php

session_start();

//$_SESSION['name']="Alex";
echo $_SESSION['name'];

//unset($_SESSION['name']);

session_destroy();

?>