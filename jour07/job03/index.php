<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<form action="" method="POST">

<?php

session_start();

if (isset($_SESSION['nbvisites'])) {
  echo $_POST["prenom"];
}

else {
  $_SESSION["nbvisites"] =0;
}

echo var_dump($_POST["prenom"])
?>
 <input type="text" name="prenom" >
 <input type="submit" name="submit" value="Envoyer">
  <input type="submit" name="reset" value="Reset">
</form>
<?php

if (isset($_POST['reset'])) {
  unset ($_SESSION['nbvisites']) ; 
}
?>
</body>
</html>
