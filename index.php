<?php
if(isset($_GET['number'])){
    $psw_length = intval($_GET['number']);
    var_dump($_GET);
    var_dump(password_gen($psw_length));
}

function password_gen($num_characters) {
    $char_string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'.'1234567890`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
    $pass = array(); //remember to declare $pass as an array
    $chars_strLength = strlen($char_string) - 1; //put the length -1 in cache
    // var_dump($alphaLength);
    for ($i = 0; $i < $num_characters; $i++) {
        $n = rand(0, $chars_strLength);
        $pass[] = $char_string[$n];
        var_dump($pass);
    }
    return implode($pass);
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
    <form method="GET" action="index.php">
        <input type="number" name="number" placeholder="psw length" >
        <button type="submit">Genera Password</button>
    </form>
</body>
</html>