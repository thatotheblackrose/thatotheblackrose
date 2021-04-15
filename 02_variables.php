<?php

// What is a variable

// Variable types
/*string
integer
float/Double
Boolean
Null
Array
Object
Resource
*/

// Declare variables
$name = 'zura';
$age = 28;
$ismale = true;
$height = '1.85';
$salary = null;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age. '<br>';
echo $ismale.'<br>';
echo $height. '<br>';
echo $salary. '<br>';
// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($ismale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';
// Print the whole variable
var_dump($name, $age, $ismale, $salary, $height);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name). '<br>';

// Variable checking functions
 is_string($name);  // fasle
 is_int($age); // true
 is_bool($ismale); // true
 is_double($height); // true
// Check if variable is defined
isset($name); // true
isset($address); // false
// Constants
define('PI', 3.14);
echo PI. '<br>';
// Using PHP built-in constants
echo SORT_ASC. '<br>';
echo PHP_INT_MAX. '<br>';