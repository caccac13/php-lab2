<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sumAndAvg($a, $b, $c){
        $sum = $a + $b + $c;
        $avg = $sum / 3;

        echo 'Tong cua 3 so nguyen '.$a.', '.$b.', va '.$c.' la: '.$sum;
        echo '<br>Trung binh cua 3 so nguyen '.$a.', '.$b.', va '.$c.' la: '.$avg;
    }
    sumAndAvg(3,4,5);
    ?>    
</body>
</html>