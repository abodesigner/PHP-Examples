<!DOCTYPE html>
<html>
<head>
	<title>Loops Examples</title>
	<style type="text/css">
		
		*{
			margin: 0;
			padding: 0;
		}

		body{
			padding: 10px
		}	

		table{
			border-collapse: collapse;
			width: 500px		
		}

		table tr th,table tr td{
			border: 1px solid #eee;
			padding: 5px;
			text-align: left
		}

		table tr th{
			background-color: #333;
			color: #FFF
		}

		table tr:nth-child(2n){
			background-color: #eee;
		}
		
	</style>
</head>
<body>



<table>
	<tr>
		<th>Employee</th>
		<th>Salary</th>
		
	</tr>
	
<?php 

	$salaries = array(1000, 2000, 3500, 4000, 6000, 8000);
	$employees= array("mohammed", "ahmed", "safa", "wael", "asmaa", "osama");


	for ($i=0, $count=count($salaries); $i < $count ; $i++) { 
		
		echo "<tr>
				<td>". $employees[$i] ."</td>
				<td>". $salaries[$i]  ."</td>
				
			</tr>";
	}


?>

		</table>
	</body>
</html>