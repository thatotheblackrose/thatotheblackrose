<?php
// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations
echo ($a + $b) * $c .'<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';
// Assignment with math operators
//$a += $b; echo $a. '<br>'; // $a = 9
//$a -= $b; echo $a. '<br>'; //$a = 1
//$a *= $b; echo $a. '<br>'; //$a = 28
//$a /= $b; echo $a. '<br>'; //$a = 1.25
// Increment operator
 echo $a++.'<br>';
 echo ++$a;

// Decrement operator
echo $a--. '<br>';
echo --$a. '<br>';
// Number checking functions
is_float(1.25); //true
is_double(1.25); // true
is_int(5); //true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false
// Conversion
$strNumber = '12.34.';
$number = intval($strNumber); // float , int , floatval , intval
var_dump($number);
echo '<br>';

// Number functions
echo "abs(-15) " . abs(-15) . '<br>'; // oppsite value negative to positive and virse verse
echo "pow(2, 3)" . pow(2,3) . '<br>'; // ?
echo "sqrt(16)" . sqrt(16) . '<br>'; // squre root
echo "max(2, 3, 9)" . max(2,3, 9) . '<br>'; // highest value
echo "min(2,3,0, -1)" . min(2,3, 0, -1) . '<br>'; // lowest value
echo "round(2.4)" . round(2.4) . '<br>'; // rounding off
echo "round(2.6)" . round(2.6) . '<br>'; // rounding off
echo "floor(2.8)" . floor(2.8) . '<br>'; // whole numbers only
echo "ceil(2.4)" . ceil(2.4) . '<br>'; // ?

// Formatting numbers
$number = 123456789.12345;//
 echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php