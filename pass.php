<?php

$token = "293_PC150753542131710643_000_1510210601_e8852279d2e14f98ec2da18462319ebf";
$token = "293_PC150753542131710643_000_1507622779674_bc1ddcee08cd9863e51db2bcd34140b7";
$list  = explode('_', $token);
$salt  = "937e28288e554c60be2732791ca1dbc4";

list($uid, $mch_num, $cashier_id, $expire_time, $hash_str) = $list;


$str = sprintf('%s_%s_%s_%s', $uid, $mch_num, $cashier_id, $expire_time);
if ($hash_str != md5($str . $salt))
{
    echo "验证失败";
}else{

    echo "验证成功";
}
