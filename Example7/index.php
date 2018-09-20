 <?php  

  if (!isset($_POST['submit'])) { 


  	// Display the form
?>
  	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  	
  		<input type="checkbox" name="color[]" value="red">RED

    	<input type="checkbox" name="color[]" value="green">GREEN

    	<input type="checkbox" name="color[]" value="blue">BLUE

    	<input type="submit" name="submit" value="Select">
  	
  	</form>


  	
  <?php } else {
  	
  	$selectedColor = $_POST['color'];

  	if(is_array($selectedColor)){
  		
  		echo "You selected <br>";

  		foreach ($selectedColor as $c) {
  			echo "<i>$c</i><br>";
  		}
  	} else{
  		echo "Nothing selected";
  	}
  }
