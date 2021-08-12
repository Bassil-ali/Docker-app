<?php

echo random_int(1,200);

echo "\n <br>";

echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');

$data = ['bassil' , 'ali' , 'ahmed'];

foreach ($data as  $value) {
    
    echo "<br>". $value . " greater";
}