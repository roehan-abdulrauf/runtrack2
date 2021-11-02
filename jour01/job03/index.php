<!DOCTYPE html>
<html lang="fr">

<head>
    <title>job00</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
$image = imagecreate(200,50);
$bleu = imagecolorallocate($image, 0, 0, 255);
    $bool = true;
    $int = 12;
    $str = "Hello Laplateforme";
    $nombre_dec = 15.5;

    ?>

    <table class="border">
        <thead>
            <tr>
                <td class="border">Type</td>
                <td class="border">Nom</td>
                <td class="border">Valeur</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border"><?php echo gettype($bool); ?></td>
                <td class="border"><?php echo "bool"; ?></td>
                <td class="border"><?php echo '<span class="color";">'.$bool.'</span>';?> <br> (La variable de type "boolean" ne contient que deux états possible: true ou false)</td>
            </tr>
            <tr>
                <td class="border"><?php echo gettype($int); ?></td>
                <td class="border"><?php echo "int"; ?></td>
                <td class="border"><?php echo '<span class="color";">'.$int.'</span>';?> <br> (La variable de type "integer" est un nombre entier qui peut etre soit positif soit négatif) </td>
            </tr>
            <tr>
                <td class="border"><?php echo gettype($str); ?></td>
                <td class="border"><?php echo "str"; ?></td>
                <td class="border"><?php echo '<span class="color";">'.$str.'</span>';?> <br> (La variable de type "string" contient des chaines de caractère) </td>
            </tr>
            <tr>
                <td class="border"><?php echo gettype($nombre_dec); ?></td>
                <td class="border"><?php echo "nombre_dec"; ?></td>
                <td class="border"><?php echo '<span class="color";">'.$nombre_dec.'</span>';?> <br> (La variable de type "float" est un nombre décimale qui est écrit avec un point{.} et non une virgule{,}) </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<style>
    .border {
        border: 1px solid black;
        padding: 10px;
        border-collapse: collapse;
        text-align: center;
    }

    thead {
        font-size: 130%;
        font-weight: bold;
    }
    .color{color:blue;
    font-size: 110%;}
</style>