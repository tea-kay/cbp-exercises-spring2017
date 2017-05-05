<?php
if (empty($_POST)) {
    echo 'not a POST';
    exit();
} 

$errors = array();

if (empty($_POST['name'])) {
    $errors[] = 'missing name';
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'not a valid email';
}

// if (!ctype_digit($_POST['amount'])) {
//     $errors[] = 'not a number';
// }

if (empty($errors)) {
    $foo = $_POST['name'];
    // echo htmlspecialchars($foo);
    header('Location: form-1.php?status=ok');
    exit();
} else {
    foreach ($errors as $error) {
        echo '<p>' . htmlspecialchars($error) . '</p>';
    }
}

?>