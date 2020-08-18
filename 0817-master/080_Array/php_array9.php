<?php
function cmp($a, $b)
{
    // return $b - $a ;
    if($a == 2) return 1 ;
    if($b == 2) return 0 ;
    
    return $a - $b ;
    // if ($a == $b) {
    //     return 0;
    // }
    // return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");
foreach ($a as $key => $value) {
    echo "$key: $value <br />";
}

?>