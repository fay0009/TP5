<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8" />
</head>
<body>
<?php
session_start();
/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */

echo "<img src='script-captchas.php' alt='captchas' />";



if (isset($_POST['send'])) {
	$answer = $_POST['captcha'];
	if (empty($answer)) {
		echo "Le code de sécurité doit être impérativement saisi !";
	}elseif ($answer == $_SESSION['code']) {
		echo "Code valide";
	}else{
		echo "Code invalide";
	}
}
?>
<form method="POST" action="#">
	<input type="text" name="captcha">
	<input type="submit" name="send">
</form>
</body>
</html>