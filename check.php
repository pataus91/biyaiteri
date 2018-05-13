<?php

include 'billetterie.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Biyaiteri</title>
</head>
<body>
	Bonjour<br>
	Veuillez rentrer le prix du billet pour connaître la catégorie du siège.
	<form action="check.php" method="get" accept-charset="utf-8">
		<label>Prix: <input type="text" name="price" value="<?php echo $price ?>"></label>
		<br>
		<label>VIP: <input type="text" name="vip" value="<?php echo $vip ?>"></label>
		<br>
		<input type="submit" name="" value="Valider">
	</form>
	Siège: <?php echo $siege ?>
</body>
</html>