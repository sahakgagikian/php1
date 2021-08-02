<?php
$str = 'The quick brown fox jumps over the lazy dog.';

function search_substring($str, $substr) {
    return strchr($str, $substr) ? 'Yes' : 'No';
}

echo search_substring($str, 'fox');