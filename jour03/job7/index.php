<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

$str2 = $str[-1];
$str[-1] = $str[0];
$str[0] = $str2;

echo $str;



/*ebauche ne pas y preter attention

$debut = $str[0];
$fin = $str[-1];
for ($i = 0; isset($str[$i]);){
    if($i = 0){ 
        $str[$i]=$fin;
    }
   elseif ($i = 1){ 
       $str[$i]=$debut;}
}

echo $str

*/

?>