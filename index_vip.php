<?php
include 'backoffice.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIP LIST</title>
</head>
<body>
	Bonjour<br>
	Veuillez rentrer le nom à ajouter ou à supprimer dans la liste VIP.
	<form action="index_vip.php" method="get" accept-charset="utf-8">
		<label>Ajouter: <input type="text" name="ajouter" value="<?php echo $add ?>"></label>
		<br>
		<label>Supprimer: <input type="text" name="supprimer" value="<?php echo $remove ?>"></label>
		<br>
		<input type="submit" name="" value="Valider">
	</form>
	<?php echo $message ?>
</body>
</html>