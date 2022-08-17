<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>
        <?php
        $name = 'bien name';
        echo "Nguyen van a <br> ";
        echo $name; 
        // khai báo kiểu giá trị của biến kèm giá trị
        var_dump($name);
        echo "tên của bạn là: ${name} <br>";
        //contraind
        define('server', 'localhost');
        echo "server::".server."<br>";
        //array 
        $array = [1,2,3,4,5,6];
        echo $array[1]. "<br>"; 
        // array associative
        $arryaass = [ 
            1 => 'nguyen van a',
            2 => 'nguyen van b'
        ]; 
        echo $arryaass[1]."<br>";
        print_r($arryaass); 
        ?>
    </h1>
</body>
</html>