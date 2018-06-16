<?php
function append($initial)
{
   $result = '';
    foreach(func_get_args() as $key => $value)
    {
        if($key>=1)
        {
            $result.=' '.$value;
        }
    }
    return $result;
}

echo append('Alex', 'Garrett');



?>