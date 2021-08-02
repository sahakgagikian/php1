<?php
$json = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
';

$arr = json_decode($json, true);

echo 'Title: ' . $arr['Title'] . '<br>' .
    'Author: ' . $arr['Author'] . '<br>' .
    'Publisher: ' . $arr['Detail']['Publisher'];
