<?php

$url = $_SERVER['REQUEST_URI'];
$arr = explode("/", $url);
$file = end($arr);
if ($file == 'constant.php') {
  header('location:index.php');
}


define('ADDRESS', ' 125/1, SISOLI, MEERUT, Meerut, Uttar Pradesh, 250004');
define('MOBILE', '+91 12345 67890');

define('EMAIL', 'info@rameshgiri.com');
