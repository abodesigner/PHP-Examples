<?php 

	// Set the file path	
	$filePath = "info.txt" or die("file not exist");

	// File ready to open
	$fh = fopen($filePath, "r") or die("can't open the file");

	// Read from file
	$data = fread($fh, filesize($filePath));

	// close the open file
	fclose($fh);

	// Display the file conent
	echo $data . "<br>";





 ?>