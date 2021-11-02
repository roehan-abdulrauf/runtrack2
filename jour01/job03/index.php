<!DOCTYPE html>
<html lang="fr">

<head>
    <title>job00</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cours.css">
</head>

<body>
    <?php

    $bool = "true";
    $int = "12";
    $str = "Hello Laplateforme";
    $dec = "15,5";
    $vide = "NULL";
    $chose = "objet";
    $tableau = "tableau";

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
            <td class="border"><?php echo gettype($boolean);?></td>
            <td class="border"><?php echo "bool";?></td>
            <td class="border"> <?php echo $bool ?> La variable de type "boolean" ne contient que deux états possible: true ou false <td>
        </tr>
        <tr>
            <td class="border"><?php echo gettype($int);?></td>
            <td class="border"><?php echo "int";?></td>
            <td class="border"><?php echo $int ?> La variable de type "integer" est un nombre entier qui peut etre soit positif soit négatif<td>
        </tr>
<tr>
            <td class="border"><?php echo gettype($string);?></td>
            <td class="border"><?php echo "str";?></td>
            <td class="border"><?php echo $str ?>La variable de type "string" contient des chaines de caractère<td>
</tr>
<tr>
            <td class="border"><?php echo gettype($float);?></td>
            <td class="border"><?php echo "decimal";?></td>
            <td class="border"><?php echo $decimal?>La variable de type "float" est un nombre décimale qui est écrit avec un point{.} et non une virgule{,}<td>
</tr>
<tr>
            <td class="border"><?php echo gettype($NUL);?></td>
            <td class="border"><?php echo "vide";?></td>
            <td class="border"><?php echo $vide?>La variable de type "null" est une valeur spéciale qui représente une variable sans valeur<td>
</tr>
<tr>
            <td class="border"><?php echo gettype($object);?></td>
            <td class="border"><?php echo "chose";?></td>
            <td class="border"><?php echo $chose?><td>
</tr>
<tr>
            <td class="border"><?php echo gettype($array);?></td>
            <td class="border"><?php echo "tableau";?></td>
            <td class="border"><?php echo $tableau?>La variable de type "array" stocke plusieurs valeurs dans une seule variable<td>
</tr>      
        </tbody>
    </table>
</body>

</html>