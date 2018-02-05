<?php

$people = array(
  2 => array(
    'name' => 'John',
    'fav_color' => 'green'
  ),
  5=> array(
    'name' => 'Samuel',
    'fav_color' => 'blue'
  ),
  6=> array(
    'name' => 'Samuel1',
    'fav_color' => 'blue1'
  )
);

$found_key = array_search('blue', array_column($people, 'fav_color'));

echo print_r($found_key, true);
