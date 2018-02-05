<?php
$pattern = '/^[0-9+a-zA-Z+_+]{6,20}$/';
$str     = '111000';
$isMatch = preg_match($pattern, $str);
echo print_r($isMatch, true);

echo "\n";
