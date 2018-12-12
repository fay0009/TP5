<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
</head>
<body>
<center><h1>TP Captcha</h1></center>
<p>Saisissez le code ci-dessous</p>
<?php
session_start();
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
//variable qui contient ce qu'il va afficher
$affichage = "<img src='script-captchas.php' alt='captchas' />";

//si on clique sur valider
if (isset($_POST['send'])) {
	$answer = $_POST['captcha'];
	//si l'input est vide
	if (empty($answer)) {
		echo "<p style='color: red;'>Le code de sécurité doit être impérativement saisi !</p>";
	//si l'input est correct
	}elseif ($answer == $_SESSION['code']) {
		//$affichage prendra cette valeur ce qui effacera l'image du captcha
		$affichage = "<p style='color: green;' >Code valide</p>";
	//si l'input est incorrecte
	}else{
		echo "<p style='color: red;'>Code invalide</p>";
	}
}
echo $affichage;
?>
<form method="POST" action="#">
	<input type="text" name="captcha">
	<input type="submit" name="send">
</form>
</body>
</html>
<?php


?>