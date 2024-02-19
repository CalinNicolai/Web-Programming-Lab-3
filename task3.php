<?php
$arr = [];
$Length = rand(1, 20);
for ($i = 0; $i < $Length; $i++)
    $arr[$i] = rand(1, 100);

function printArray($arr) {
    foreach ($arr as $element) {
        echo $element . " ";
    }
}

printArray($arr);