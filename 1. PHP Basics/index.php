<?php
// ABOVE, WE OPENED A NEW PHP TAG

// This is language contruct to output text to the webpage
echo("Hello World");
// OR
echo "Hello World";

// PHP CODE STATEMENTS ALWAYS END WITH (;) SEMICOLON 

// You can also output numbers
echo 1;

//PHP Concatenation: Joining strings with each other. "Hello" and "World" joined so it will output "HelloWorld".
echo "Hello"."World";

//Type Juggling: PHP Automatically detects if there is only number inside quotes added to a number or the same situtation happened before.
// so "3" becomes 3 => 3 + 1 = 4
echo "3"+1;


// DIE function, used to terminate execution of this script or file.
die();
// With argument: It will output "Hello" and then dies.
die("Hello");

// This is a comment
/*
This is also a comment
but with many lines
a line comment starts with //
multi-line comments start with /* and end with:
*/

// Closing PHP TAG:
?>