<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Playground</title>
</head>
<body>
    
    <?php 

        $first_name = 'Timothy';
        $surname = 'Kim';
        $year_of_birth = 1990;
        $height = 181;    

        define('MY_OS', 'Macintosh');
    ?>

    First name: <?php echo $first_name?><br>
    Surnam: <?php echo $surname?><br>
    Year of birth: <?php echo $year_of_birth?><br>
    Height: <?php echo $height?><br>
    My OS is <?php echo MY_OS?>
    <br>

    <?php 
        $first_name_int = (integer)$first_name;
        var_dump($first_name_int);
        $first_name_bool = (boolean)$first_name;
        var_dump($first_name_int);
        $first_name_str = (string)$first_name;
        var_dump($first_name_int);
        $first_name_float = (float)$first_name;
        var_dump($first_name_int);
    ?>






    <?php $variable = 123; ?>
    <?php echo 'The type of' . $variable . ' is ' . gettype($variable); ?><br>
    <?php $variable = "123"; ?>
    The type of <?php echo $variable ?> is <?php echo gettype($variable);?><br>
    <?php $variable = '123 Times Square'; ?>
    The type of <?php echo $variable ?> is <?php echo gettype($variable);?><br>
    <?php $variable = 12.3; ?>
    The type of <?php echo $variable ?> is <?php echo gettype($variable);?><br>
    <?php $variable = true; ?>
    The type of <?php echo $variable ?> is <?php echo gettype($variable);?><br>
    <?php $variable = 'true'; ?>
    The type of <?php echo $variable ?> is <?php echo gettype($variable);?><br>
    <?php var_dump([1, 2, 3]);?>

    <?php
        // function dd ($variable) 
        // {
        //     var_dump($variable);
        //     die();
        // }
        function print_variable_type($variable) 
        {
            echo 'They type of ' . $variable . ' is ' . gettype($variable) . '<br>';
        }

        print_variable_type('kjflajslkfj')
    ?>

    <?php
        $celsius = 36;
        $fahrenheit = null;

        function get_fahrenheit($celsius) 
        {
            $fahrenheit = (9/5) * $celsius + 35;
            return $fahrenheit;
        }
        var_dump(get_fahrenheit(17));

    ?>

    <?php
        $variable1 = 1;
        // $variable_odd = (boolean)$variable % 2;
        // echo $variable = $variable ? 'odd' : 'even';
        
        function odd_or_even($number) 
        {
            return $number % 2 ? 'odd' : 'even';
        }

        echo odd_or_even(9877);
    ?>
</body>
</html>