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
    $x=10;
    $y=10.0;
    if($x <> $y) { //lessthan or greater than 
        echo "This is true";
    }
    else {
        echo "This is false";
    }

    if($x == $y) { //this indicate that the value stored is same 
        echo "This is true";
    }
    else {
        echo "This is false";
    }


    if($x === $y) {  //this indicate that the value stored and the type of value is same and identical
        echo "This is true";
    }
    else {
        echo "This is false";
    }
    ?>
</body>
</html>