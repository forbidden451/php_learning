<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $cars = array("audi" => 10,"bmw" => 12,"toyota" => 18);

    foreach($cars as $key => $value) {
        echo "{$key} has mileage of {$value} <br>";
    }

    ?>
</body>
</html>