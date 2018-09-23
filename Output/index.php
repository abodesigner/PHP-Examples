<?php

/* 
	Title Lesson : How to get Output ?

	The Difference between echo & print in below table:
	################################################### 				 

				==================================================================================
				     Comparasion  	   |           echo			           |        print				
				==================================================================================	
				1. Speed		       |	 Marginally Faster		       |														
	            ----------------------------------------------------------------------------------						
				2. Function		       |         Statement                 |   Statment behave like a fun 
				----------------------------------------------------------------------------------
				3. Return Value        |         void type                 |   int type ... Always reurn 1
				----------------------------------------------------------------------------------
				4. Accept args without
					  parentheses      | Multiple args separated by comma  |      One argument
				----------------------------------------------------------------------------------
				5. Output              |   One or multiple strings         |       One string
				----------------------------------------------------------------------------------
				




	The Similraties between echo & print in below table  :
	######################################################

				1. Parentheses work fine and take one argument.       						
	            ---------------------------------------------
				2. Double Quotes display variable value   
				---------------------------------------------
				3. The {} syntax is useful for printing array variables & non array variables
				----------------------------------------------------------------------------------
				4. Single quotes display the variable name
				----------------------------------------------------------------------------------
				5. 
				----------------------------------------------------------------------------------
				

*/					

					// echo phpinfo();

					// echo "The Similarities between echo & print . <br>";
					// echo "=============================. <br><br>";				

					// echo "1. Works fine with ( ) or without paranathes .<br>";
					// echo "=========" . "<br><br>";					
					
					// echo "echo works without paranathes . <br>";
					// print "print() also works without parentheses.<br>";

					// echo "############" . "<br><br>";					
							
					// echo ("echo works well with paranathes" . "<br>");
					// print("print() works well with paranathes" . "<br>");
					
					// echo "############" . "<br><br><br>";

					// echo "2. Using single quotes will print the variable name, not the value .<br>";
					// echo "=========" . "<br><br>";

					// echo 'foo is $foo'.'<br>'; // foo is $foo
					// print 'foo is $foo'. '<br>'; // foo is $foo

					// echo "############" . "<br><br><br>";

					// echo "3. Using double quotes will print the variable value" . "<br>";
					// echo "=========" . "<br><br>";	

					// // You can use variables inside of an echo statement
					// $foo = "foobar";
					// $bar = "barbaz";

					// echo "foo is $foo" . "<br>"; // foo is foobar										
					// print "bar is $bar" . "<br>"; // bar is barbaz									
					
					// echo "############" . "<br><br><br>";		
							

					echo "****************************************** <br>";	

					echo "The Differences between echo & print . <br>";
					echo "=============================. <br><br>";

					 echo "1. Because echo does not behave like a function, the following code is invalid.
							  ($foo) ? echo 'true' : echo 'false'". "<br>";

					// The following code is valid.
					echo $foo ? 'true': 'false'; // changing the statement around

					// However, the following examples will work:
					($bar) ? print 'true' : print 'false'; // print is also a construct, but
                                            			   // it behaves like a function, so
                                            			   // it may be used in this context.

					echo "############" . "<br><br><br>";	


					// If you are not using any other characters, you can just echo variables
					echo $foo . "<br>";          // foobar
					echo "You can echo multiple variables using comma " . $foo, $bar . "<br>";     // foobarbarbaz

					/*
						A benefit to passing in multiple arguments over using concatenation in echo regards the precedence of the period operator in PHP. If multiple arguments are passed in, then parentheses will not be required to enforce precedence:
					*/
					echo  "and a ", 1, 2, 3,"<br>";
					echo "Sum: ", 2 + 2,"<br>";
					$name = "ahmed";
					echo "Hello ", isset($name) ? $name : "John Doe", "!";
					
					/*
						With concatenation, the period operator has a higher precedence than both the addition and ternary operators, and so parentheses must be used for the correct behaviour:
					*/

						echo 'Sum: ' . (1 + 2);
						echo 'Hello ' . (isset($name) ? $name : 'John Doe') . '!' . '<br>';

						//The {} syntax is useful for printing array variables, an example to illustrate
						// You can also use arrays
						$baz = array("value" => "foo");
						echo "this is {$baz['value']} !"; // this is foo !

						//The {} syntax is useful for printing non array variables as well, an example to illustrate
						echo "my name is {$name}" . "<br>";
					
					// If you are not using any other characters, you can just print one variables
					print "you can print one variable only using print() " . $foo;          // foobar






  ?>