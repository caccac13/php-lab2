<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $str = 'aks';
    // echo ord($str);
    function isLowerCase($str){
        for($sc = 0;$sc < strlen($str); $sc++){
            if(ord($str[$sc]) >= ord('A') && ord($str[$sc]) <= ord('Z')){
                return false;
            }
        }
        return true;
    }
    $str1 = "hello";
    $str2 = "helLo";
    echo "Chuỗi '$str1' là chữ thường: " . (isLowerCase($str1) ? "Đúng" : "Sai") . "<br>";
    echo "Chuỗi '$str2' là chữ thường: " . (isLowerCase($str2) ? "Đúng" : "Sai") . "<br>";
    ?>
</body>
</html>