<!DOCTYPE html>
<html lang="fr">

<head>
    <title>job01</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            font-size: 120%;
        }
    </style>
</head>

<body>
    <?php

    for($i=1; $i <=100; $i++){ 
        if ($i %3 ==0 && $i %5 ==0) {
        echo "FizzBuzz </br>";
    } 
     if ($i %3 ==0) {
        echo "Fizz </br>";
    }  
    else if ($i %5 ==0) {
        echo " Buzz </br>";
    }
    else {echo "$i <br />" ;}
}

   /* $i = -0;

    while ($i <= 99) {
        $i++;
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo " FizzBuzz </br>";
        } else if ($i % 3 == 0) {
            echo "Fizz </br>";
        } else if ($i % 5 == 0) {
            echo " Buzz </br>";
        } else {
            echo "$i <br />";
        }
    }*/

    ?>
</body>

</html>