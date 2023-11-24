<?php
session_start();

$logged = false;
// Controllo se l'utente è loggato
if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {
    $logged = true;
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
    <?php if ($logged): ?>
        <h1>Profile Utente</h1>
    <?php endif; ?>
</body>
</html>