<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
<?php 
        
setcookie("nbvisites");
        
if (isset($_POST['reset'])){
    $_COOKIE['nbvisites'] = 0;
		
}
if(!isset($_COOKIE['nbvisites'])){
	$_COOKIE['nbvisites'];
}
else{
    $valeur = $_COOKIE['nbvisites'];
    $valeur++;
    setcookie("nbvisites" , $valeur);
}

echo $_COOKIE['nbvisites'];
		
		
?>
		
	<input type="submit" name="reset" value="Reset">
</form>
</body>
</html>