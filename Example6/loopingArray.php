<!DOCTYPE html>
<html>
<head>
	<title>Looping Over Array</title>
</head>
<body>


	My favourite colour is : <br>

	<ul>
		<?php 

			$colors = ["red", "orange", "yellow", "black", "pink"];

			echo $arrLen = count($colors) . "<br>";
			echo $arr = sizeof($colors);

			for ($i=0; $i < $arrLen ; $i++) { 
				//echo "<li>" . $colors[$i] . "</li>";
			}


		?>
	</ul>

		<?php
		// define an array
		$menu = array(
				'breakfast' => 'bacon and eggs',
				'lunch' => 'roast beef',
				'dinner' => 'lasagna');

		/* returns the array ('breakfast', 'lunch', 'dinner') with numeric indices */

		$result = array_keys($menu);

		print_r($result);

		print "<br />";

		/* returns the array ('bacon and eggs', 'roast beef', 'lasagna') with numeric indices */
		$result = array_values($menu);

		print_r($result);

		?>


</body>
</html>