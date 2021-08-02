<?php
$str = 'the quick brown fox jumps over the lazy dog.';
$substr = 'the';

function replace_first_occurence($str, $substr, $replacer) {
    $str = substr($str, 0, strpos($str, $substr)) . $replacer . substr(strchr($str, $substr), strlen($substr));
    return $str;
}

echo replace_first_occurence($str, $substr, 'That');