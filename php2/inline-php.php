<?php
    // logic & code to retrieve and prepare the data
    // also handle form submission, saving data to databases etc.
    $user_is_admin = false; //

    $vehicles = [
        'Bicycle' => 50,
        'Car' => 150,
        'Train' => 110
    ];
    $message = [
        'Preparing to do some stuff...',
        'Doing amazing stuff...',
        'Stuff is done.'
    ];

    $message = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .board .row {
        overflow: hidden;
    }
    .board .row > div {
        float: left;
        width: 3em;
        height: 3em;
    }
    .board .black {
        background-color: #000000;
    }
    </style>
</head>
<body>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>

        <?php if ($user_is_admin == true) :?>

        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>
        
        <?php endif; ?>
    </ul>

    <?php $names = ['Bruce Wayne', 'Clark Kent', 'Tony Stark', 'Peter Parker']; ?>

        <?php foreach($names as $nr => $name) : ?>

        <div class="name">
            <?php echo $nr.'. '.$name; ?>
        </div>

    <?php endforeach; ?>


    <table>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>
            <?php foreach($vehicles as $vehicle_name => $top_speed): ?>
        <tr>
            <td><?= $vehicle_name ?></td>
            <td><?= $top_speed?> </td>
        </tr>
        <?php endforeach; ?>
    </table>




    <?php if ($message = false) :?>
        <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">

            <?php foreach($message as $nr => $message) : ?>
                <li><?php echo $message; ?></li>
            <?php endforeach; ?>
        
        </ul>
    <?php else : ?>

    <?php endif; ?>

<br>

<div class ="board">
<?php for($row = 0; $row < 8; $row++) : ?>
    <div class="row">
        <?php for($i = 0; $i < 8; $i++) : ?>
            <?php if ($i % 2 == $row % 2): ?>
                <div class="white"></div>
            <?php else :?>
                <div class="black"></div>
            <?php endif;?>
        <?php endfor; ?>
    </div>
<?php endfor; ?>
</div>
</body>
</html>