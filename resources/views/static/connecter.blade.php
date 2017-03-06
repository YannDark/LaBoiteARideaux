<?php
session_start();

if (isset($_POST['login']) && isset($_POST['mdp'])) {

	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	
	if ($login == "maman" && $mdp == "maman") {
		$_SESSION['isConnected'] = true;
		header('Location: administration/');
	}
}

require_once ('templates/header.php');


require_once ('templates/footer.php');
?>