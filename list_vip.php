<!DOCTYPE html>
<html>
<head>
	<style>
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
	<title>VIP LIST</title>
</head>
</head>
<body>
	<table>
      <thead>
        <tr><th>VIP LIST</th>
        	<th>SUPPRIMER</th>	
        </tr>
      </thead>
	 <tbody>
	   <?php 

	   	$file = "vip.txt";
	   	if (file_exists($file)) {
		   	$listvip = file_get_contents($file);
		 	$array = explode(', ', $listvip);

		 	foreach ($array as $key => $name) {
		        ?> 
		        <tr>
		          <td><?php echo $name; ?></td>
		          <td>
	 				<a href="remove_vip.php?vip=<?php echo $name ?>">supprimer</a>
		        </tr>
		        <?php
		     }
		}     
	   ?>
	 </tbody>
</table>

</body>
</html>