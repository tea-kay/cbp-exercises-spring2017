<?php
function vdump($variable)
{
    echo nl2br(var_export($variable, true));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>
</head>
<body>
    <?php vdump($_GET);?>

    <?php vdump($_POST);?>
 
    <?php //vdump($_SERVER);?>
    <?php
        $array_of_data = [
                'name' => 'Tim Kim',
                'day' => 'Wednesday'
        ];
        $qs = http_build_query($array_of_data);
        echo $qs;
   ?>
    <nav>
        <ahref></ahref>
   </nav>

    <?php if(isset($_GET['page']) && $_GET['page']=='form') : ?>
        <?php include ('forms.php'); ?>
    <?php else : ?>
        This is home.
    <?php endif; ?>

</body>
</html>