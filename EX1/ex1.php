<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<script src="main.js"></script>
</head>

<body>

	<table class="table">
	<?php
		
	for($row=0; $row<=100; $row++){
		echo "<tr>";
		for($col=0; $col<=100; $col++){
			if($row==0 && $col==0){
				echo "<td></td>";	
			}
			else if($row==0){
					echo "<td class='bold'>".$col."</td>";
				}
			else if($col==0){
				echo "<td class='bold'>".$row."</td>";
			}
				
			else{
				echo "<td>". $row * $col. "</td>";
			}
			
		}
		echo "</tr>";
	}
	?>

	</table>

</body>
</html>