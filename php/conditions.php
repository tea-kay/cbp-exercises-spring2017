<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conditions</title>
</head>
<body>

<?php

    define('MY_OS', 'Mac');

    switch(MY_OS) {
    case 'Windows':
        echo 'Edge';
        break;
    break;
    case 'Mac':
        echo 'Safari';
        break;
    case 'Linux':
        echo 'Firefox';
        break;
    default:
        echo 'Just use Chrome...';
    break;
}

if ($age > 35) {
    echo 'age is greater than 35';
} elseif ($employed == true) {
    echo 'is employed';
} elseif ($age <= 18) {
    echo 'is younger than 18';
} elseif ($age < 12 && $gender == 'female') {
    echo 'is younger than 12 and female';
} elseif ($age >= 18 || $employed == false) {
    echo 'is 18 or older and unemployed';
} elseif ($age >= 60 && $employed == true && $gender == 'female') {
    echo 'is 60 or older, employed female';
} elseif (($gender == 'male' && $age > 20) || ($employed == false && $gender == 'female' && $age > 25)) {
    echo 'is a male over 20 or unemployed female above 25';
} else {
    echo 'none of the above';
};






?>

</body>
</html>