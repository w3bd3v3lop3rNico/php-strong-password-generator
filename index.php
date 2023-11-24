<?php
session_start();

require './functions.php';

if(isset($_GET['number'])){
    $psw_length = intval($_GET['number']);
    // var_dump($_GET);
    $_SESSION['password'] = password_gen($psw_length);
    header('Location: ./account.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="">
        <input type="number" name="number" placeholder="psw length" >
        <button type="submit">Genera Password</button>
    </form>
    <form method="GET" action="login.php">
        <input type="text" name="username" placeholder="username" >
        <input type="password" name="password" placeholder="password" >
        <button type="submit">Login</button>
    </form>
</body>
</html>