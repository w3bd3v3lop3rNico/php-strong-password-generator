<?php
function password_gen($num_characters) {
    $char_string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'.'1234567890`-=~!@#$%^&*()_+,./<>?;:[]{}\|';
    $pass = array(); //remember to declare $pass as an array
    $chars_strLength = strlen($char_string) - 1; //put the length -1 in cache
    // var_dump($alphaLength);
    for ($i = 0; $i < $num_characters; $i++) {
        $n = rand(0, $chars_strLength);
        $pass[] = $char_string[$n];
        // var_dump($pass);
    }
    return implode($pass);
}