<form action="index.php" method="POST">
    Please enter your password: <br />
    <input type="password" name="password"><br />
    <input type="submit" value="submit">
</form>

<?php
$password = 'password';
if(isset($_POST['password'])&&empty($_POST['password']))
{
    if($_POST['password']==$password)
    {
        echo 'Correct!';
    }
    else
    {
        echo 'Incorrect!';
    }
}
?>