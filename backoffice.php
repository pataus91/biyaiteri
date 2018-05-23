<?php

include 'database.php';

$add = "";
$remove = "";
$message = "";

// isset = Determine if a variable is set and is not NULL
//$_GET est una tableau et "ajouter"/"supprimer sono gli index"
if (isset($_GET["ajouter"]) && isset($_GET["supprimer"])) {
	// Formulaire submitted
	$add = $_GET["ajouter"];
	$remove = $_GET["supprimer"];

	if (!empty($add)) {
		addVip($add);
		$message = "Nome bien ajouté";
	}

	if (!empty($remove)) {
		$message = removeVip($remove, $message);
	}
}

?>