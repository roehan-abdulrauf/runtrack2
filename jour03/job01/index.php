<?php
$Job1 = [200, 204, 173, 98, 171, 404, 459];

for($i = 0; $i <= 6; $i++){
    if($Job1[$i] % 2 == 0){
        echo $Job1[$i]." est paire"."</br>";
} 

else {echo $Job1[$i]." est impaire "."</br>" ;}
}

?>