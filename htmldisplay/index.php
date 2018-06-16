<?php
$name = "alex";
if($name == "alex")
{
    echo "Hi, Alex.";
}
else
{
    ?>
    You're not Alex? Please type your name: <br />
    <form action="index.php" method="post"><input type="text" name="name"><input type="submit" value="Submit">
    </form>
<?php
}
?>