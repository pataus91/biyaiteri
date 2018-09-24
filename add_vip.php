<?php

$name = $_GET['name'];
$errorMes = "This field is required";

if($name !== "") {
	include 'affichage_add_vip_success.phtml';
} else {
	echo $errorMes;	
}