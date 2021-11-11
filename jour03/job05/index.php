<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic =
[
'voyelles' => ["AEIOUYaeiouy"],
'consonnes' => ["BCDFGHJKLMNPQRSTVWXZbcdfghjklmnpqrstvwxz"],
];

foreach($dic ['consonnes'] as $key => $consonnes )
foreach ($dic['voyelles'] as $key => $voyelles)

$nb_voyelles = 0;
$nb_consonnes = 0;

for ($i = 0; isset($str[$i]); $i++) {
    for ($vi = 0; isset($voyelles[$vi]); $vi++) {
        if ($str[$i] == $voyelles[$vi]) {
            $nb_voyelles++;
    }
}
}

for ($i = 0; isset($str[$i]); $i++) {
    for ($ci = 0; isset($consonnes[$ci]); $ci++) {
        if ($str[$i] == $consonnes[$ci]) {
            $nb_consonnes++;
    }
}
}

?>

<table >
    <thead>
        <tr>
            <td> Voyelles</td>
            <td> Consonnes</td>
        </tr>
        <tr>
            <td><?php echo  $nb_voyelles; ?></td>
            <td><?php echo $nb_consonnes; ?></td>
        </tr>
    </thead>
</table>