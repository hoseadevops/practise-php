<?php

function qSort($a = null)
{
    if(!is_array($a))
        return false;

    $c = count($a);
    if($c < 2)
        return $a;

    $l = $r = [];
    for($i=1; $i <$c; $i++)
    {
        if($a[$i] < $a[0])
        {
            $l[] = $a[$i];
        }else{
            $r[] = $a[$i];
        }
    }

    return array_merge(qSort($l), array($a[0]), qSort($r));
}

$a = [123,1234,4,35,454,6456,14,2,2,1,4,5,6,7,8,9,3,145,345];


echo print_r(qSort($a), true);
