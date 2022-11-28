<?php

$data = intval($_GET["length"] ?? 0);

function newPassword($data)
{
    $userPassword = [];
    $chars = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z"
    ];
    for ($i = 0; $i < $data; $i++) {
        $userPassword[$i] = $chars[rand(1, (count($chars) - 1))];
    }

    return $userPassword;
}

$result = newPassword($data);
