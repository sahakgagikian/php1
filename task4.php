<?php
$x = [1, 2, 3, 4, 5];
var_dump($x);
echo "<br>";
unset($x[2]);
sort($x, SORT_NUMERIC);
var_dump($x);
