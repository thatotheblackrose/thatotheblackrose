<?php

// Create simple string
$name = 'Tron';
$string = 'Hello Black '.$name.'. i am alive ' ; // sentence stracture example 2
$string2 = "Hello DARKNESS $name. is waiting for you"; // sentence stracture example 2
echo $string. '<br>';
echo $string2. '<br>';
// String concatenation
echo 'hey ', ' world ', 'Game is waiting', '<br>';
// String functions
$string = "          hello world   ";
echo "1 - ". strlen($string) . '<br>' . PHP_EOL; // returns number of spaces between the qutoes{""} and the words
echo "2 - ". trim($string) . '<br>' . PHP_EOL; // returns the variable
echo "3 - ". ltrim($string) . '<br>' . PHP_EOL; // not sure ????? seems to return the same as above
echo "4 - ". rtrim($string) . '<br>' . PHP_EOL; // not sure ????? seems to return the same as above{2}
echo "5 - ". str_word_count($string) . '<br>' . PHP_EOL; // counts number of words or symbols
echo "6 - ". strrev($string) . '<br>' . PHP_EOL; // returns the value backwards or in reverse
echo "7 - ". strtoupper($string). '<br>' . PHP_EOL; // returns the value in capital letters
echo "8 - ". strtolower($string). '<br>' . PHP_EOL; // returns the value in lower letters
echo "9 - ". ucfirst($string). '<br>' . PHP_EOL;// not sure ???
echo "10 - ". lcfirst($string). '<br>' . PHP_EOL;//
echo "11 - ". ucwords($string). '<br>' . PHP_EOL;//
echo "12 - ". strpos($string, 'world'). '<br>' . PHP_EOL;//
echo "13 - " . stripos($string, 'word'). '<br>' . PHP_EOL; //
// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php