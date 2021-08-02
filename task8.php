<?php
$arr = ["Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"];

echo '<h4>Sorted by ascending order sorting by Value</h4>';
asort($arr);
foreach($arr as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

echo '<br><h4>Sorted by descending order sorting by Value</h4>';
arsort($arr);
foreach($arr as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

echo '<br><h4>Sorted by ascending order sorting by Key</h4>';
ksort($arr);
foreach($arr as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}

echo '<br><h4>Sorted by descending order sorting by Key</h4>';
krsort($arr);
foreach($arr as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}