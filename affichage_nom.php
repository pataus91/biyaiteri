<?php


if (isset($_GET["nom"]) && isset($_GET["mdp"])) {

	$nom = $_GET["nom"];
	$mdp = $_GET["mdp"];
	$usernames = array('Silvia', 'Quentino', 'Sami', 'Raph');
	$password = array ('silvia', 'quentino', 'sami', 'raph');


	if (in_array($nom, $usernames) && in_array($mdp, $password)){
		$login = array_combine($usernames, $password);
		foreach ($login as $key => $value) {
			if ($value === $mdp && $key === $nom) {
				header('Location: list_vip.php');
			} 
			else {
				// echo "Invalid Username or password";
				header('Location: authentication_page.php');
			}
		}	
	}
	 else {
		echo "Invalid Username or password";
	}
}
	
	


// verifier que le nom utilisatuer correspond à un nom existant. (on l'a dans un array). Si existe, il est renvoyé à notre backend, s'il est pas dedans, message d'erreur