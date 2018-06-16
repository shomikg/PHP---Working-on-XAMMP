<?php
function append($initial)
{
   $result = '';
    foreach(func_get_args() as $key => $value)
    {
        echo $key;
    }
}

echo append('Alex', 'Garrett');



?>