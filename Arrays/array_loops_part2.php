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
			$students = array("ahmed", "wael", "asmaa", "ali", "fares");
			
			$arabic  = array(50, 20, 80, 100, 10);
			$english = array(30, 45, 60, 90,  20);
			$math    = array(20, 55, 70, 100, 90);
			$science = array(50, 10, 20, 80,  100);
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
			
			<?php 

			$total = 0;
			$classSuccess = 0;
			$classFailed = 0;
			for ($i=0, $count= count($students);$i < $count ; $i++) { 
			$total = $arabic[$i] + $english[$i] + $math[$i] + $science[$i];
			$cssClass = ($total > 200) ? 'green' : 'red'; 
			$status = ($total > 200) ? 'succeed' : 'failed';

			if($total > 200){
				$classSuccess++;
			} else{
				$classFailed++;
			}
			echo "	
				<tr>
					<td>{$students[$i]}</td>
					<td>{$arabic[$i]}</td>
					<td>{$english[$i]}</td>
					<td>{$math[$i]}</td>
					<td>{$science[$i]}</td>
					<td>{$total}</td>
					<td><span class=\"{$cssClass}\">{$status}</span></td>
				</tr>";
			}
			?>

			<tr>
				<th colspan="7">This class <?php echo ($classSuccess >= $classFailed) ? 'succeed' : 'failed' ?></th>
			</tr>
			

		</table>


	</body>
</html>