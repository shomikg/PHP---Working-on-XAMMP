<?php
/**
 * You will need to uncomment and comment the the code to set and unset
 * the cookies accordingly.  Please view the lecture to see how this is done
 * */


// Cookie expires in a day
$exp = time()+86400;
$exp_unset = time()-86400;

setcookie("name", "Alex", $exp);
setcookie("age", 19, $exp);

// unset cookie
setcookie("name","",$exp_unset);

if (isset($_COOKIE['name'])) {
    echo "Cookie is set";
} else {
    echo "Cookie is not set";
}

?>