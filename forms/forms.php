<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
    <form action="submit.php" method="post">
        <label for='username'>Username: </label>
        <input type="text" name="username" id='username' placeholder="username" tabindex="1">
        <br>
        <label for='password'>Password: </label>
        <input type="password" name="password" placeholder="password" tabindex="2">
        <br>
        <label for='hungry'>Hungry?</label>
        <input type="checkbox" value="hungry" id='hungry' checked tabindex="3">
        <br>
        Food: 
        <!--<input type="radio" name="food" value="pizza" checked> Pizza
        <input type="radio" name="food" value="beer"> Beers
        <br>-->
        <select name="food">
            <option value="1">Burger</option>
            <option value="2">Pizza</option>
            <option value="3">Beer</option>
        </select>
        <br>
        Note:
        <textarea name="note" rows="5" cols="23"></textarea>
        <input type="hidden" name="token"value="8888">
        <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        <input type="button" value="Something">
        <button><em>BUTTON</em></button>
    </form>
</body>
</html>