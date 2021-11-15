<?php

$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT salles.nom, etage.nom FROM salles,etage WHERE salles.id_etage = etage.id");
$resultat = mysqli_num_rows($request);
//var_dump($resultat);

/*while(){
    echo "<tr>";
    echo "<td>";
    echo $resultat;
    echo "</td>";
    echo "</tr>";
}*/
  
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        table {
        border-collapse: collapse;
        }
        th {
            border: 1px solid black;
            padding: 3px
        }
        td {
            border: 1px solid black;
            padding: 3px
        }
    </style>
</head>

<body>
<table>
<thead>
<tr>
<td>NOM SALLE </td>
<td>NOM ETAGE</td>
</tr>
</thead>
<tbody>
<?php   
        while ($row = mysqli_fetch_array($request)) {
            echo "<tr><td>$row[0]</td>";
            echo "<td>$row[1]</td></tr>";
        }
?>
</tbody>
</table>
</body>