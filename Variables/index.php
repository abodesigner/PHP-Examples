<?php



/* Identifier = variables, functions, and various other user-defined objects. 

** Variable Name Rules:
   1) Start with letter (small or capital) or _ followed alphanumeric or _. $___name / $Name / $name_;
   2) Case-sensetive.
*/

   // Global Variable
   $x = "welcome to back-end";
   echo $x . "<br>";	


	// Local Variable
   function show(){
	 $xx = "welcome to php";
	 echo $xx . "<br>";
   }

   show();
   //echo $xx; //syntax error


   // Function Parameters
   // $x --> parameter.
   // $y --> local variable.
   function add10($x){
   	$y = $x + 10;
   	return $y;
   }

   //echo add10(10);
   //echo $x; // error
   //echo $y; // error


   // Static Variables

   // In the the example, all local variables 's values will destroy once the function end excution.
   // In the the example, static variables will remain it's value even if the function end excution.
   function addOne(){
   	static $x = 1;
   	$x++;
   	echo $x;
   }

	addOne(); // Display 2
	addOne(); // Display 2
	addOne(); // Display 2


	// Super Global Variables = pre-defined variables in php & format is a like arrays
	//print_r($_SERVER);


	// Variable variables
	$name = 'Ali';
	$$name = 'Ali ahmed';
	echo $Ali;


	// Constant
	define('PI', 3.14);

	echo PI; 
   

