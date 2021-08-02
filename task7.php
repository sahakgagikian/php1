<?php
$original_arr = ['1','2','3','4','5'];
$inserted_char = '$';

echo 'Original array : ';
foreach($original_arr as $i) {
    echo $i . ' ';
}

array_splice($original_arr, 3, 0, $inserted_char);

echo '<br>' . 'After inserting $ the array is :';
foreach($original_arr as $i) {
    echo $i . ' ';
}