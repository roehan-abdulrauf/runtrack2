<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
<?php
        
setcookie("nbvisites");
			
?>
 <input type="text" name="prenom" >
 <input type="submit" name="submit" value="connexion">

 <?php

if (isset($_POST['submit'])) {
    echo "Bonjour prenom !";
}

 ?>
	<input type="submit" name="reset" value="deco">
   
</form>
</body>
</html>