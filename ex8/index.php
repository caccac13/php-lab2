<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function checkPalindrome($str){
        if($str == strrev($str)) return 1;
        else return 0;
    }

    $chuoi1 = "hung dep trai";
    $chuoi2 = "racecar";
    $chuoi3 = "hello";

    echo "'$chuoi1'" . (checkPalindrome($chuoi1) ? " là palindrome" : " không phải palindrome") . "<br>";
    echo "'$chuoi2'" . (checkPalindrome($chuoi2) ? " là palindrome" : " không phải palindrome") . "<br>";
    echo "'$chuoi3'" . (checkPalindrome($chuoi3) ? " là palindrome" : " không phải palindrome") . "<br>";

    ?>
</body>
</html>