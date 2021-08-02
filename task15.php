<?php
$str = 'www.example.com/public_html/index.php';
$a = strrpos($str, '/');
echo substr($str, $a + 1);