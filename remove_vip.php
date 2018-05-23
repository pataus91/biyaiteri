<?php

include 'database.php';

$vip = $_GET["vip"];

removeVip($vip,"");

header('Location: list_vip.php');