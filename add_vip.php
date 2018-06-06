<?php

include 'database.php';

//$_GET c'est une variable qui contien une array. Je test s'il y a un valeur à l'index ajouter
// isset Determine if a variable is set and is not NULL
if (isset($_GET["vip"]) && !empty($_GET["vip"])) {
	addVip($_GET["vip"]);
}

header('Location: list_vip.php');