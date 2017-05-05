<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
    <form action="submit.php" method="get">
        Firstname: 
        <input type="text" name="firstname" placeholder="Firstname">
        <br>
        Lastname: 
        <input type="text" name="lastname" placeholder="Lastname">
        <br>
        Hungry?
        <input type="checkbox" value="hungry" checked>
        <br>
        Food: 
        <input type="radio" name="food" value="pizza"> Pizza
        <input type="radio" name="food" value="beer"> Beers
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>