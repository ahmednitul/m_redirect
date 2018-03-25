<?php
$file = $_GET['!'];
$sites = array_map("trim", file("$file"));
$redirect = $sites[array_rand($sites)];
header("Location:$redirect"); die();
?>
