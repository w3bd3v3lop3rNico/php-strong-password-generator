<?php 
session_start();
$password = $_SESSION['password'];
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>La tua nuova password è: <?php echo $password ?></p>

</body>
</html>