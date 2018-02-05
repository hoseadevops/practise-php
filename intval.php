<?php

$str = 'H000000000000000000000000003002';

$str = str_replace("H", '', $str);

$str = intval($str);

echo $str;
