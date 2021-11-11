<form method="POST">
    <input type="text" name="username">
    <input type="password" name="password"> <input type="submit" value="se connecter">
</form>
<?php
// se demander, pourquoi pas GET ?

foreach ($_POST as $key => $value) {
}
if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
    echo "C'est pas ma guerre</br>";
} else {
    echo "Votre pire cauchemar</br>";
}

?>