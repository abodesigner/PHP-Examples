<?php


/*
** Data Types

** Scalar Datatypes: One value

   - Integer, Float, Boolean, String.

======================================
1) Integer :
   - Binary      -> 0-1.
   - Decimal     -> 0-9.
   - Octal       -> 0-7 (Numbers start with 0).
   - Hexadecimal -> 0-F (Numbers start with 0X).
==================================================
2) Float : double - real

	- 1.23.   
==================================================
3) String : " " or ' '

	- You can display variables values in duoblequotes not single quotes.
===========================================================================
4) Bolean : 
   - True  = 1, " ", -11.
   - false = 0,"".	
===========================================================================

** Compound Datatypes: Multiple values

   - Arrays, Object.


1) Array : array();

	$months = ["JAN","FEB","MAR","APR"];
	echo $months[3];

2) Objects : using new keyword.


=================================
== Converting from datatypes to onether
== Using type casting.

(array) - (float) - (int) or (integer) - (string) - (double) - (object) - (bool) or (boolean)
=================================

*/



// Examples

$num1 = 10;

$num2 = '10'; 		// will cast to interger 10

$num3 = '5num'; 	// will take the ineger value only = 5

$num4 = 'x5num'; 	// will ignore the value

// echo $num4 + 100; 	// will display 100

// echo 'The number of student in our class is ' . $number;

// echo "The number of students in our class is $number";

// echo "The number of students in our class is {$number}";

$months = ["JAN","FEB","MAR","APR"];
echo $months[3];
