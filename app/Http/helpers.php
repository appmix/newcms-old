<?php

function int_random($length = 10) {
    $result = '';
    $times = ceil($length/5);
    for ($i = 0; $i < $times; $i++) {
        $result .= sprintf('%05d', rand(0, 99999));
    }
    $result = substr($result, 0, $length);
    return $result;
}
