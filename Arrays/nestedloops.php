<!DOCTYPE html>
<html>
<head>
	<title>Nested Loops Example</title>
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


	<?php 
		
		$std1 = array('Mohammed', 75, 25, 10);
		$std2 = array('Ahmed', 25, 25, 50);
		$std3 = array('Osama', 95, 35, 50);

		$std4 = array('Wael', 15, 35, 10);
		$std5 = array('Yaser', 80, 20, 10);
		$std6 = array('Asmaa', 100, 55, 5);

		$class1 = array($std1, $std2, $std3);
		$class2 = array($std4, $std5, $std6);

		$school = array($class1, $class2);

		
	?>	



	<table>
		<tr>
			<th>Std Name</th>
			<th>Arabic</th>
			<th>Math</th>
			<th>English</th>
			<th>Total</th>
			<th>%</th>
			<th>Status</th>
		</tr>

		<?php

		$total = 0; 

		for ($i = 0, $ii = count($school); $i< $ii ; $i++) { 
		echo"
			<tr>
				<td data-class='class1' colspan='7'>Class" . ($i+1) . " </td>
			</tr>";


			for ($j=0, $jj= count($school[$i]); $j < $jj; $j++) { 
				
				$total =  $school[$i][$j][1] + $school[$i][$j][2] + $school[$i][$j][3];
				$persentage = ($total / 200) * 100;
				$status = ($total >= 100) ? 'Pass' : 'Fail';

				echo"
		
				<tr>
				<td>". $school[$i][$j][0] ."</td>
				<td>". $school[$i][$j][1] ."</td>
				<td>". $school[$i][$j][2] ."</td>
				<td>". $school[$i][$j][3] ."</td>
				<td>". $total ."</td>
				<td>". $persentage ."%</td>
				<td>". $status . "</td>
				</tr>";
			}
		




		}





		?>

		<!-- <tr>
			<td data-class="class1" colspan="7">Class 1</td>
		</tr>
		<tr>
			<td>Mohammed</td>
			<td>75</td>
			<td>25</td>
			<td>50</td>
			<td>150</td>
			<td>70%</td>
			<td>Succeed</td>
		</tr>
		<tr>
			<td>Ahmed</td>
			<td>25</td>
			<td>25</td>
			<td>50</td>
			<td>100</td>
			<td>50%</td>
			<td>Succeed</td>
		</tr>
		<tr>
			<td>Osama</td>
			<td>95</td>
			<td>35</td>
			<td>50</td>
			<td>180</td>
			<td>80%</td>
			<td>Succeed</td>
		</tr>

		<tr>
			<td colspan="7">Class 2</td>
		</tr>
		<tr>
			<td>Mohammed</td>
			<td>75</td>
			<td>25</td>
			<td>50</td>
			<td>150</td>
			<td>70%</td>
			<td>Succeed</td>
		</tr>
		<tr>
			<td>Ahmed</td>
			<td>25</td>
			<td>25</td>
			<td>50</td>
			<td>100</td>
			<td>50%</td>
			<td>Succeed</td>
		</tr>
		<tr>
			<td>Osama</td>
			<td>95</td>
			<td>35</td>
			<td>50</td>
			<td>180</td>
			<td>80%</td>
			<td>Succeed</td>
		</tr> -->
	</table>	


	</body>

</html>

