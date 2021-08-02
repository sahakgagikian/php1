<?php
$str = 'Some String';

$str = strtoupper($str);
echo $str . '<br>';

$str = strtolower($str);
echo $str . '<br>';

$str[0] = strtoupper($str[0]);
echo $str . '<br>';
//
//foreach ($str as $i) {
//    if($i == 0 || $str[$i - 1] == ' ') {
//        $str[$i] = strtoupper($str[$i]);
//    }
//}

for ($i = 0; $i < strlen($str); $i++) {
    if($i == 0 || $str[$i - 1] == ' ') {
        $str[$i] = strtoupper($str[$i]);
    }
}
echo $str . '<br>';