<?php
// Include the data file
require 'data.php';

// Display the simple array
echo "<h1>Simple Array: </h1>";
displayArray($simpleArray);

// Display the multidimensional array
echo "<h1> MultiDimentional Array: </h1>";
displayMultidimensionalArray($multiArray);
// Calculate and display the sum of an array of book prices
$bookPrices=[1200,300,1020,650,9018];
$sum=calculateSum($bookPrices);
echo "<h1>Total Sum of Book Prices:</h1>";
echo "<p>Total: $" . ($sum) . "</p>";
?>
