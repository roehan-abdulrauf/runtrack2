<!DOCTYPE html>
<html lang="fr">

<head>
    <title>job01</title>
    <style>
        * {
            font-size: 120%;
        }
    </style>
</head>

<body>
    <?php
    
    $i = 0;

    while ($i <= 1337) {
        echo $i;
        $i++;
        echo "<br />";
        if ($i == 42) {
            echo "<b><u>$i</u></b> <br />";
            $i++;
        }
    }

    ?>
</body>

</html>