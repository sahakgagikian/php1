<?php
$color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

echo 'Values are in lower case. <br>';
print_r($color);
echo '<br>';

foreach($color as $key => $value) {
    $color[$key] = strtoupper($value);
}
echo 'Values are in upper case. <br>';
print_r($color);