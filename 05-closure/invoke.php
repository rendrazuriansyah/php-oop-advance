<?php

class IsPossitiveInt {
    public function __invoke($value) {
        return ((int) $value == $value && $value > 0);
    }
}

$invoke = new IsPossitiveInt();

var_dump($invoke(1));
var_dump($invoke('2'));
var_dump($invoke(4.0));
var_dump($invoke(-10));
var_dump($invoke(3.15));

// OUTPUT
// bool(true)
// bool(true)
// bool(true)
// bool(false)
// bool(false)