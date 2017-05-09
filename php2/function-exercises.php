<?php

function return_val($val) {
    return $val;
}

function increased_val($val) {
    return $val + 1;
}

function print_val($val) {
    echo $val;
}

function add_two_value($first, $second) {
    return $first + $second;
}

function increase_val(& $val) {
    $val++;
}
$variable = 1;
increase_val($variable);
$variable; 

function combine_two_strings($str, $str2) {
    return $str . $str2;
}

function combine_strings($str, $str2 = '', $third = '', $fourth = '') {
    return $str . $str2 . $third . $fourth;
}

function create_h1 ($text) {
    echo '<h1>' . $text . '</h1>';
}

function create_message($content, $id){
    echo '<div class="message" id="' . $id . '">' . $content . '</div>';
}

function bigger_value($first, $second) {
    if ($first > $second) {
        return $first;
    } elseif ($first < $second) {
        return $second;
    } else {
        return null;
    }
}

function convert_length($length, $unit){
    switch($unit) {
        case'cm':
            return $length / 2.54;
            break;
        case 'in':
            return $length * 2.54;
            break;
    }
}

function longer_string($first, $second, & $longer_length) {
    $first_len = strlen($first);
    $second_len = strlen($second);
    if ($first_len > $second_len) {
        $longer_length = $first_len;
        return $first;
    } elseif ($first_len < $second_len) {
        $longer_length = $second_len;
        return $second;
    } else {
        $longer_length = $first_len;
        return $first;
    }
}

function foo() {
    $arg = func_get_arg;
    return $arg;
}
?>