<?php

$token = '131_C149320108459710113_000_1493207573616_b4b0dc6c5ca229b8c2571442d2016b9f';
$token = '131_C149320108459710113_000_2592000_738ec94c83a6cd123bba41dba022bb7f';

$list = explode('_', $token);

list($uid, $mch_num, $cashier_id, $expire_time, $hash_str) = $list;

$str = sprintf('%s_%s_%s_%s', $uid, $mch_num, $cashier_id, $expire_time);

if ($hash_str != md5($str . '860bba442af811e7b6f500163e30dbf9'))
{
    echo 'run here';
}


function makeToken($uid, $mch_num, $cashier_id, $salt)
{
    $expire_time = 86400 * 30;
    $str = sprintf('%s_%s_%s_%s', $uid, $mch_num, $cashier_id, $expire_time);
    $token = sprintf('%s_%s', $str, md5($str . $salt));
    return $token;
}

echo makeToken(131, 'C149320108459710113', '000', '860bba442af811e7b6f500163e30dbf9');


