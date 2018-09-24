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

		.green{
			color: #080
		}

		.red{
			color: #f00
		}

		table tr:hover{
			background-color: yellow 
		}
		
	</style>
</head>
	<body>

		<?php 

			// Creating Arrays
			$student = array("ahmed", "wael", "asmaa", "ali", "nesma");
			
			$arabic  = array(50, 70, 50, 100);
			$english = array(50, 70, 50, 100);
			$math    = array(50, 70, 50, 100);
			$science = array(50, 70, 50, 100);
		?>

		<table>
			<tr>
				<th>Student Name</th>
				<th>Arabic</th>
				<th>English</th>
				<th>Math</th>
				<th>Science</th>
				<th>Total</th>
				<th>Status</th>	
			</tr>
			<tr>
				<td>Mohammed</td>
				<td>50</td>
				<td>70</td>
				<td>50</td>
				<td>100</td>
				<td>270</td>
				<td><span class="green">Succeed</span></td>
			</tr>
			<tr>
				<td>Osama</td>
				<td>90</td>
				<td>20</td>
				<td>50</td>
				<td>30</td>
				<td>190</td>
				<td><span class="red">Failed</span></td>
			</tr>
			<tr>
				<td>Asmaa</td>
				<td>100</td>
				<td>40</td>
				<td>60</td>
				<td>50</td>
				<td>250</td>
				<td><span class="green">Succeed</span></td>
			</tr>
			

		</table>


	</body>
</html>