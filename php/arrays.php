<?php

require_once 'var_show copy.php';

$fruit = [
    0 => 'Apple',
    1 => 'Pear',
    2 => 'Orange'
];

$fruit_colors = [
    'Apple' => 'Red',
    'Pear' => 'Green',
    'Orange' => 'Orange'
];

var_show($fruit);

var_show($fruit_colors);

$empty = [];

$another_empty = array();

$cars_i_want = [
    'Tesla Model S',
    'Tesla Roadster',
    'Ferrari F12',
    'Cadaillac Eldorado 1970',
];

$cars_i_want[] = 'Fisker Karma';

var_show($cars_i_want);

echo '<br>';
echo 'For myself I would buy a ' . $cars_i_want[1] . '.<br>';
echo 'For my spouse I would buy a ' . $cars_i_want[3] . '.<br>';
$cars_i_want[4] = 'Tesla Model 3';
echo 'For each of my kids I would buy a ' . $cars_i_want[4] . '.<br>';

echo '<hr><h2>Foreach</h2>';

// foreach($cars_i_want as $index => $car) {
//     echo $index;
//     echo $car;
// }

echo '<ul>';
foreach($cars_i_want as $index => $car) 
{
    echo '<li>' . $car . '</li>'; 
}
echo '</ul>';

?>

echo '<hr><h2>Colors</h2>';

