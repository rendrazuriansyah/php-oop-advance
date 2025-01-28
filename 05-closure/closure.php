<?php

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($array);

$even = array_filter($array, function ($item) { // argumen yg kedua ini merupakan callback dan juga fungsi anonim/closure
    return $item % 2 == 0;
});
print_r($even);

$filterFunc = function ($item) { // fungsi anonim/closure
    return ($item % 2 == 1);
};
$odd = array_filter($array, $filterFunc); // argumen yg kedua ini merupakan callback
print_r($odd);