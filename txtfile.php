<?php
$sites = array_map("trim", file("sites.txt"));
$redirect = $sites[array_rand($sites)];
header("Location:$redirect"); die();
?>
