<?php

include 'database.php';

//ho un link "supprimer" -> href="remove_vip.php?vip=<?php echo $name ? -> *chiamo la mia variabile $vip che ricerca il valore nella tabella $_GET all'index vip. All'index VIP il valore della mia variabile è la variabile $name che equivale al mio nome nella tabella.  
if (isset($_GET["vip"]) && !empty($_GET["vip"])) {
	//nella mia funzione originale ho due variabili. Ma ho bisogno di passare solo un valore. Quindi il primo valore che devo passare è $vip, il secondo non ne ho bisogno, quindi metto una chaine vide "".
	removeVip($_GET["vip"]);
}

//dico al codice di riportarmi sulla stessa pagina. Se clicco sul link non sono rinviata ad un'altra pagina ma resto su questa.
header('Location: list_vip.php');



//*NB all'inizio del mio codice ho un foreach ($array as $key => $name) che è legata al mio $array creato dal mio database text. 
		 




// ritornare sulle basi
// test se la pase billetterie funzioni ancora
// la persona che riceve le persone accede al sito. Proteggere il sito. 
// Diversi livelli di sicurezza. Obiettivo che una persona che cerca di loggarsi le autorizziamo e ogni volta che riviene non ha bisogno di loggarsi ogni volta. 
// $_GET variable che contiene tutti i valori dell'url
//$_SESSION è una tabella che contiene tutti i valori dati ad un utilizzatore la volta precedente		 