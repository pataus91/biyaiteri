<?php

include 'database.php';

$add = "";
$remove = "";
$message = "";


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

// isset = Determine if a variable is set and is not NULL
//$_GET è una tabella. "ajouter"/"supprimer sono gli index".
//se guardo l'url, ad esempio vedo http://localhost:8000/index_vip.php?ajouter=Silvia&supprimer=Quentin
//ovvero la mia tabella $_GET ho una variabile all'index ajouter con il valore Silvia. Stessa cosa per supprimer. 

?>

