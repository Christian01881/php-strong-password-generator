<?php 

$length = 0;

function randomPass($length) {
    $length = $_GET['passwordLength'];
    $characters = '0123456789@#!$%&=?^*abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomCharacter = str_shuffle($characters);
    $password = substr($randomCharacter, 0, $length);
    return $password;
}

?>