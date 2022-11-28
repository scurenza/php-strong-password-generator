<?php
session_start();

// $data = intval($_GET["length"] ?? 0);
// $data = intval($_GET["length"] ?? 0);
// $letters = $_GET["letters"] ?? "";
// $numbers = $_GET["numbers"] ?? "";
// $symbols = $_GET["symbols"] ?? "";
$data = $_GET;



function newPassword($data)
{

    $userPassword = [];
    $elementsSum = [];
    $chars = [
        "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z"
    ];
    $nums = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
    $syms = ["£", "$", "&", "*", "_", "-"];

    if ($data["letters"] && $data["numbers"] && $data["symbols"]) {
        $elementsSum = array_merge($chars, $nums, $syms);
        for ($i = 0; $i < $data["length"]; $i++) {
            $userPassword[$i] = $elementsSum[rand(1, (count($elementsSum) - 1))];
        }
    } elseif ($data["letters"] && $data["numbers"]) {
        $elementsSum = array_merge($chars, $nums);
        for ($i = 0; $i < $data["length"]; $i++) {
            $userPassword[$i] = $elementsSum[rand(1, (count($elementsSum) - 1))];
        }
    } elseif ($data["letters"]) {
        for ($i = 0; $i < $data["length"]; $i++) {
            $userPassword[$i] = $chars[rand(1, (count($chars) - 1))];
        }
    } elseif ($data["numbers"]) {
        for ($i = 0; $i < $data["length"]; $i++) {
            $userPassword[$i] = $nums[rand(1, (count($nums) - 1))];
        }
    } elseif ($data["syms"]) {
        for ($i = 0; $i < $data["length"]; $i++) {
            $userPassword[$i] = $syms[rand(1, (count($syms) - 1))];
        }
    } else {
        for ($i = 0; $i < $data["length"]; $i++) {
            $userPassword[$i] = $chars[rand(1, (count($chars) - 1))];
        }
    }

    return $userPassword;
}

$_SESSION["password"] = newPassword($data);
var_dump($data["length"]);
var_dump($data["letters"]);
var_dump($data["numbers"]);
var_dump($data["symbols"]);



if ($letters) {
}
