<?php

$siege = '';
$price = '';
$vip = '';

// isset = Determine if a variable is set and is not NULL.
if (isset($_GET["price"]) && isset($_GET["vip"])) {
	// Formulaire submitted
	$price = $_GET["price"];
	$vip = $_GET["vip"];
	$file = 'vip.txt';

	if (file_exists($file)) {
		$viplist = file_get_contents($file);
	 	$array = explode(', ', $viplist);

		if (!empty($vip)) {
			if (in_array($vip, $array)) {
				$siege = "A";
			} else {
				$siege = "Refusé";
			}
		} else {
			if ($price == 250) {
				$siege = "C";
			} elseif ($price == 400) {
				$siege = "B";
			} elseif ($price == 1500) {
				$siege = "A";
			} else {
				$siege = "Erreur";
			}
		}
	}
}

?>

