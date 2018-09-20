<?php

	// if the "submit" variable does not exist, the form has not been submitted - display the initial page.
	if(!isset($_POST['submit'])){ ?>

		<form action="<?php echo $_SERVER['PHP_SELF']?>" METHOD='POST'>

			Enter Your Name:<input type="text" name="name"><br><br>
			
			Enter Your Age: <input type="text" name="age"><br><br>
    		
    		<input type="submit" name="submit" value="Go">
		
		</form>		

	<?php } else {

		$userName = $_POST['name'];
		$userAge  = $_POST['age'];

		$tested = $userAge < 18 ? "$userName is too young" : "welcome " . $userName;

		echo $tested;

	}


