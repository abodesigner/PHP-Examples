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
			text-align: center
		}

		table tr th{
			background-color: #333;
			color: #FFF;
			text-align: center;
		}

		table tr td[data-class='bg']{
			background-color: #f00;
			color: #FFF;
			font-weight: bold;
			text-align: center;
		}

		table tr:nth-child(2n){
			background-color: #eee;
		}
		
	</style>
</head>
	<body>
		<table>
			<tr>
				<th>Name</th>
				<th>Arabic</th>
				<th>Math</th>
				<th>English</th>
				<th>Total</th>
				<th>%</th>
				<th>Status</th>
			</tr>
<?php 
		
		$school = array(

			'Class 1' => array(
								'std1' => array(
									  				'Name'    => 'Mohammed',
 													'Arabic'  => 75,
													'Math'    => 25,
													'English' => 20
											   ),

								'std2' => array(
													'Name'    =>'Wael',
													'Arabic'  => 55,
													'Math'    => 15,
													'English' => 10
												),
								'std3' => array(
													'Name'    =>'akram',
													'Arabic'  => 65,
													'Math'    => 35,
													'English' => 20
												)  
							),

			'Class 2' => array(
								'std1' => array(
									  				'Name'    => 'Amgad',
 													'Arabic'  => '75',
													'Math'    => '25',
													'English' => '20'
											   ),

								'std2' => array(
													'Name'    =>'Fahmy',
													'Arabic'  => '55',
													'Math'    => '15',
													'English' => '10'
												) 

		));

		foreach ($school as $class => $students) {		
		
			$classLength = count($students);

			echo "<tr>
					<td colspan='7' data-class='bg'>$class has $classLength Students</td>
				 </tr>";
			echo "<tr>";

			foreach ($students as $item => $data) {		
				
				
					$total = 0;
					$percentage = 0;
					$status;
					foreach ($data as $k => $val) {
						
						echo "<td>" . $val . "</td>";
						
						if(is_numeric($val)){
							
							$total += $val;

							$percentage = ($total / 200) * 100;

						}

						$status = ($total > 100) ? 'Pass' : 'Fail';

					}

					echo "<td><b>" . $total . "</b></td>";
					echo "<td><b>" . $percentage . "%</b></td>";
					echo "<td><b>" . $status . "</b></td>";														
				echo "</tr>";

			}
		}
	
	?>		
		</table>
	</body>
</html>