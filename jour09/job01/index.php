<?php

/* une autre manière d'écrire le code sql

$bdd = mysqli_connect("localhost","root","","jour08");

$req = mysqli_query($bdd,"SELECT*FROM etudiants");

$res = mysqli_fetch_all($req);

$req2 = mysqli_query($bdd,"INSERT INTO etudiants (prenom,nom,naissance,email sexe) VALUES ('test','test','test')");
*/


$sql = mysqli_connect('localhost', 'root' , '', 'jour08');
$request = mysqli_query($sql, "SELECT * FROM etudiants");
$resultat = mysqli_num_rows($request);

?>

<DOCTYPE html>
<html lang="fr">
<head>
	<title></title>
</head>
<body>
<table>

<thead class="border">
    <tr>
        <th class="border" scope="col">ID</th>
        <th class="border" scope="col">PRENOM</th>
        <th class="border" scope="col">NOM</th>
        <th class="border" scope="col">NAISSANCE</th>
        <th class="border" scope="col">SEXE</th>
        <th class="border" scope="col">EMAIL</th>
    </tr>
</thead>
<tbody class="border">
<?php
     
  /*une autre manière de faire
    foreach($res AS $key => $value){
        echo '<tr>';
        foreach($value AS $key2 => $value2){
        echo '<td>'.$value2.'</td>';
        }
        echo '</tr>';
    }*/
   
        while ($row = mysqli_fetch_array($request)) {
            echo "<tr><td>$row[id]</td>";
            echo "<td>$row[prenom]</td>";
            echo "<td>$row[nom]</td>";
            echo "<td>$row[sexe]</td>";
            echo "<td>$row[naissance]</td>";
            echo "<td>$row[email]</td></tr>";
        }
?>
</tbody>

</table>

</body>
</html>

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