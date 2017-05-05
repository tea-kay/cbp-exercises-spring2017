<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First Form</title>
</head>
<body>
<?php
    if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo '<p>OK COOL</p>';
    };
?>
    Contact Me:
    <form action="submit.php" method="post">
        <label for='Name'>Name: </label>
        <input type="text" name="name" id='Name' placeholder="name" tabindex="1">
        <br>
        <label for='email'>Email: </label>
        <input type="email" name="email" id='email' placeholder="email" tabindex="2">
        <br>
        What kind of help do you need?
        <br>
        <select name="Reason">
            <option value="1">Development</option>
            <option value="2">Marketing</option>
            <option value="3">Financial</option>
        </select>
        <br>
        <label for='email'>Notes: </label>
        <br>
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