<?php 

	$names = array("ali","nagwa","wael","sobhy");

	$fruits = ["apple",'banana',"grap"];

	$colors = array(
					"red"    => "apple",
					"yellow" => "banana",
					"purple" => "grap"
					);

	// var_dump($fruits);
	
	// print_r($colors);

	// echo $fruits[1];

	// echo $colors['yellow'];

		$fruits[] = "watermelon";

		//print_r($fruits);

		$colors["green"] = "watermelon";

		//print_r($colors);

		// Push at the End
		array_push($fruits, "orange");

		//print_r($fruits);

		
		// POP from the end
		array_pop($fruits);

		print_r($fruits);




 ?>