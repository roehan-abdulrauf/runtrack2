<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <p>
            <label for="mail"> Entrez votre email :</label>
            <input type="text" name="mail" id="mail">
        </p>
        
        <p>
            <label for="password">Entrez votre mot de passe :</label>  
            <input type="password" name="password" id="password">
        </p>

        <p>
            
            <input type="submit" name="bouton" id="bouton" value="Ajouter">
        </p>
    </form>

    <table>
        <thead>
            <th>
                <td>Argument</td>
                <td>Valeur</td>
            </th>
        </thead>
        <tbody>
            <th>
                <td><?php 
                    $i=0;
                    foreach($_GET as $key => $value) {
                        $i++;
                        echo $key.'</br>';
                    } ?></td>
                
            </th>
            <th>
                <td><?php 
                    $i=0;
                    foreach($_GET as $key => $value){
                        $i++;
                        echo $value.'</br>';
                    }    ?></td>
            </th>
        </tbody>
    </table>
</body>
</html>