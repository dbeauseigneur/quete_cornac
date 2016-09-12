<!DOCTYPE html>
<html>
	<head>
		<title>test php</title>
		<link href="style.css" rel="stylesheet">
	</head>

	<body>
		<?php include 'header.php';?>
		<table>
		<tr>
			<th>Heure</th><th>titre</th><th>artistes</th><th>image</th>
		</tr>
		<?php include 'tableau.php';
			$nbspectacle = count($spectacle);
			for ($i=0;$i<$nbspectacle;$i++){
				echo "<tr> \n";
				echo "<td>".$spectacle[$i]["heure"]."</td>"."<td>".$spectacle[$i]["titre_spectacle"]."</td>"."<td>".$spectacle[$i]["artiste"]."</td>"."<td><img src=".$spectacle[$i]["image_url"]." height = \"100\" width = \"100\" </td> \n";
				echo "</tr> \n";		
			}
		
		?>
		</table>
		<?php include 'footer.php';?> 

	</body>
