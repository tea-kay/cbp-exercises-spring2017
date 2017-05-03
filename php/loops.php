<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
<?php

$time_served = 0;

while($time_served < 10) {
    $time_served++;
    echo 'The prisoner has served ' . $time_served . ' years <br>';
    }

$time_served = 0;

do {
    $time_served++;
    echo 'The prisoner has served ' . $time_served . ' years <br>';
} while($time_served < 10);

for ($i = 0; $i < 5; $i++) {
    echo 'The prisoner has ' . (5-$i) . ' more years to serve. <br>';
};

for ($i = 10; $i >= 0; $i--) {
    echo 'The prisoner has ' . $i . ' more years to serve. <br>';
        if ($i > 5) {
         continue;
        }
    echo 'Going to a parole hearing... <br>';
        if ($i == 2) {
            echo 'Paroled';
            break;
        }
    echo 'Parole denied. <br>';
};

?>

 
</body>
</html>