<?php

  // Démarrage ou restauration de la session
  session_start();

  foreach($_POST as $key => $value)

  $Refreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
  
  if ($Refreshed == true) {
      $_SESSION['nbvisites']++;
  } 
  
  if (isset($_POST['reset'])) {
     $_SESSION['nbvisites'] ==0;
  
  }

  /*if ($_SESSION['nbvisites'] == true) {
    $_SESSION['nbvisites']++;
} 

elseif (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] ==0;

}*/
  echo $_SESSION['nbvisites']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="" method="POST">
  <input type="submit" name="reset" value="Reset"><?php ?></inupt>
</form>

</body>
</html>