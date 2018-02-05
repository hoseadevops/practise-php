<?php
/**
 * 快速排序算法 原理:
 *
 */
function qSort( $a = [] )
{
    if(!is_array($a))
        return false;

    $c = count($a);

    if( $c < 2 )
        return $a;

    $l = $r = [];

    for($i=1; $i<$c; $i++)
    {
        if($a[$i] < $a[0])
            $l[] = $a[$i];
        else
            $r[] = $a[$i];
    }

    return array_merge(qSort($l), array($a[0]), qSort($r));
}

$nums = [4, 5, 3, 9, 6, 8, 7, 2, 1];

echo print_r(qSort($nums), true);




