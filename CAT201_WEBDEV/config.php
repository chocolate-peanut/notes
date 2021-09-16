<?php

if(isset($_POST["submit"])) {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $text = $_POST["text"];
    $file = fopen("info.txt", "a+");
    fwrite($file, $name."\t$email"."\t$text\n");
    fclose($file);
    header("location: index.html");
}