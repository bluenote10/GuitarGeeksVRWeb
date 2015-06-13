<?php

$countfile = 'counts_all.txt'
$relurl = '/downloads/all.txt'

$hit_count = @file_get_contents($countfile);
$hit_count++;
@file_put_contents($countfile, $hit_count);

$url = 'http://' . $_SERVER['HTTP_HOST'];            // Get the server
$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // Get the current directory
$url .= $relurl;                                     // <-- Your relative path
header('Location: ' . $url, true, 302);              // Use either 301 or 302
die();
