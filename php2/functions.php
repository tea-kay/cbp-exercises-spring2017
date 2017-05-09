<?php

function my_function($param_1, $param_2) 
{
    $param_1++;
}

$number = 123;
$string = 'Bob';
my_function($number, $string);

// echo $variable; 

$variable = 1;

function my_function_ref(& $variable) {
    $variable++;
};

echo $variable;

$my_var = 12;

$reference_to_my_var = $my_var;

$reference_to_my_var++;

echo $my_var;
// echo $copy_of_my_var;

// function my_function_ref(& $variable=123) {
//     $variable++;
// };

my_function_ref($honza);

echo $honza;

// function divmod($num1, $num2, & $number3) {
    
//     $modulus = $num1 % num2;
//     $number3 = $modulus;

//     $new_num = $num1 / $num2;
//     return $new_num;
// };
// $modulus = null;
// $result = divmod();

// echo $result; 


function create_paragraph($contents, $class = "paragraph", $id = "") {
    return '<p class="'.$class.'"'.($id?' id="'.$id.'"':'').'>'.$contents.'</p>';
}

create_paragraph('text inside paragraph');

create_paragraph('text inside paragraph', 'p_class');

create_paragraph('text inside paragraph', 'paragraph_class', 'paragraph_id');


function convert_weight($weight, $class="kgs") {
    
    if ($class == "lbs") {
        return $weight * 0.45359237;

    } elseif ($class == "kgs") {
        return $weight * 2.20462262;

    } else {
        return $weight * 2.20462262;
    }
}

echo convert_weight(10, "kgs");
?>

