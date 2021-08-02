<?php
$str1 = 'football';
$str2 = 'footboll';

function cmp_strs($str1, $str2) {
    for ($i = 0; $i < strlen($str1); $i++) {
        if($str1[$i] != $str2[$i])
            return $i;
    }
    return 'The strings are identical.';
}

echo cmp_strs($str1, $str2);