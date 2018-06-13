<!DOCTYPE html>
<html>
<head>
	<title>Authentication</title>
</head>
<body>
	Bonjour<br>
	Veuillez rentrer votre nom utilisatuer et mot de passe.
	<form action="log_in.php" method="get" accept-charset="utf-8">
		<label>Nom: <input type="text" name="nom" ></label>
		<br>
		<label>mdp: <input type="text" name="mdp" ></label>
		<br>
		<input type="submit" name="" value="Valider">
	</form>
	<!-- <?php
	if(isset($_GET['error']))
    {
        $Message = "Invalid Username or password";
        echo $Message;
    }
    ?> -->
</body>
</html>


<!-- form action identifica l'endroit dove posto il formulario
	input è il campo type la tipologia del campo
	name il nome che ha nell'url ad esempio /toto.php?test=quentin -> nome è test
	value è il valore che inserisco nel formlario, ad esempio quentin 




