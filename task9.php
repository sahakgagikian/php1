<?php
$temps = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$avg = array_sum($temps) / count($temps);
echo 'Average temperature is: ' . $avg . '<br>';

$unique = array_unique($temps);
sort($unique, SORT_NUMERIC);

echo 'List of seven lowest temperatures: ';
for($i = 0; $i < 7; $i++) {
    echo $unique[$i] . ' ';
}
echo '<br>';

echo 'List of seven highest temperatures: ';
for($i = 7; $i > 0; $i--) {
    echo $unique[count($unique) - $i] . ' ';
}
echo '<br>';