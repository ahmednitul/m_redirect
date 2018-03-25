<?php

$link[] = array('link' => 'http://example.com/1', 'percent' => 10);
$link[] = array('link' => 'http://example.com/2', 'percent' => 10);
$link[] = array('link' => 'http://example.com/3', 'percent' => 10);

$percent_arr = array();
foreach($link as $k => $_l) {
    $percent_arr = array_merge($percent_arr, array_fill(0, $_l['percent'], $k));
}

$random_key = $percent_arr[mt_rand(0,count($percent_arr)-1)];
$redirectlink = $link[$random_key]['link'];

header("Location: $redirectlink");
?>
