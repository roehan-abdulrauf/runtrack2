<!DOCTYPE html>
<html lang="fr">

<head>
    <title>job00</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cours.css">
</head>

<body>
    <?php

    $bool = true;
    $int = 12;
    $str = "Hello Laplateforme";
    $dec = 15.5;

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
                <td class="border"> <?php echo nl2br("$bool\n"); ?> (La variable de type "boolean" ne contient que deux états possible: true ou false)</td>
            </tr>
            <tr>
                <td class="border"><?php echo gettype($int); ?></td>
                <td class="border"><?php echo "int"; ?></td>
                <td class="border"><?php echo nl2br("$int\n"); ?> (La variable de type "integer" est un nombre entier qui peut etre soit positif soit négatif) </td>
            </tr>
            <tr>
                <td class="border"><?php echo gettype($str); ?></td>
                <td class="border"><?php echo "str"; ?></td>
                <td class="border"><?php echo nl2br("$str\n"); ?>(La variable de type "string" contient des chaines de caractère) </td>
            </tr>
            <tr>
                <td class="border"><?php echo gettype($dec); ?></td>
                <td class="border"><?php echo "dec"; ?></td>
                <td class="border"><?php echo nl2br("$dec\n"); ?> (La variable de type "float" est un nombre décimale qui est écrit avec un point{.} et non une virgule{,}) </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
<style>
    .border {
        border: 1px solid black;
        padding: 5px;
        border-collapse: collapse;
        text-align: center;
    }

    thead {
        font-size: 130%;
        font-weight: bold;
    }
</style>