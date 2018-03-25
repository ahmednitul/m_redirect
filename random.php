<?php
$links = array(

    "http://google.com",
    "http://yahoo.com",
    "http://nitul.net"

);

$randomRedirection = $links[array_rand($links)];
header("Location: $randomRedirection");
?>
