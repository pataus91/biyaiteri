<?php

if (isset($_GET["nom"]) && isset($_GET["mdp"])) {
	$nom = $_GET["nom"];
	$mdp = $_GET["mdp"];
	$credentials = array(
		'Silvia' => 'silvia',
		'Quentino' => 'quentino',
		'Sami' => 'sami',
		'Raph' => 'raph'
	);

	$usernames = array_keys($credentials);

	if (in_array($nom, $usernames)){
		foreach ($credentials as $key => $value) {
			if ($value === $mdp && $key === $nom) {
				header('Location: list_vip.php');
				die;
			} 	
		}	
		$message = "Invalid password";	
	} else {
		$message = "Invalid Username";
	}
	header('Location: authentication_page.php?message=' . $message);
}



// verifier que le nom utilisatuer correspond à un nom existant. (on l'a dans un array). Si existe, il est renvoyé à notre backend, s'il est pas dedans, message d'erreur

//nb; siccome sto facendo affectation non metto => ma =