<!DOCTYPE html>
<html>
<head>
	<title>Message Processing</title>
</head>
<body>
	<?php 

		$input = $_POST['age'];

			// if($input < 18){

			// 	echo "You're too young for this club, come back when you're a little older";
			// } 
			// 	else{

			// 	echo 'Come on in, we have alcohol and music awaiting you!';
	
			// }

			$guestAge = $input < 18 ? "You're too young for this club, come back when you're a little older" : "Come on in, we have alcohol and music awaiting you!";


			echo $guestAge;
		
	?>
</body>
</html>