<?php

//code delle funzioni add e remove connesse a index_vip

function removeVip ($name) 
{
	$file = 'vip.txt';

	if (file_exists($file)) {
		$listvip = file_get_contents($file);
	 	$array = explode(', ', $listvip);

	 	foreach ($array as $key => $value) {
	 		if ($value === $name) {
	 			unset($array[$key]);
	 		}
	 	} 

		if (count($array) == 0) {
			unlink ('vip.txt');
		} else {
			$newlistvip = implode(", ", $array);
			file_put_contents($file, $newlistvip);
		}
	}
}

function addVip ($names) 
{
	$file = 'vip.txt';

	if (file_exists($file)) {
		$names = ', ' . $names;
	}

	file_put_contents($file, $names, FILE_APPEND);
}

?>