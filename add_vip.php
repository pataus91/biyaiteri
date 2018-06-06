<?php

include 'database.php';

$add = "";

if (isset($_GET["ajouter"])) {
	$add = $_GET["ajouter"];

	if (!empty($add)) {
		addVip($add);
	}
}

// header('Location: list_vip.php');



