<form action="index.php" method="get">
    Name: <br /><input type="text" name="name"><br />
    Age: <br /><input type="text" name="age" size="5"><br /><br />
    <input type="submit" value="Submit">
</form>


<?php

$name = $_GET['name'];
$age = $_GET['age'];
if(isset($name)&&isset($age))
{
    echo 'I am '.$name.' and I am '.$age.' years old.';
}
?>