<?php

$file = fopen("info.txt", "r");
if(!$file)
    echo "<b>No information set.</b>";
else {
    echo "<b>Display Information</b><br>";
    while (!feof($file)) {
        $data = fgets($file);
        list($name, $email, $text) = array_pad(explode("\t", $data),3,null);
        echo $data."<br>";
    }
}
fclose($file);