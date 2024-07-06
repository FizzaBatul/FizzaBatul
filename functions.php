<?php
// Function to display a simple array
function displayArray($array){
    echo "<ul>";
    foreach($array as $item){
        echo "<li>{$item}</li>";
    }
    echo "</ul>";
}

// Function to display a multidimensional array
function displayMultidimensionalArray($array) {
    echo "<table border='1'>";
    echo "<tr><th>Title</th><th>Author</th><th>Year</th><th>Genre</th></tr>";
    foreach ($array as $book) {
        echo "<tr>";
        echo "<td>{$book['title']}</td>";
        echo "<td>{$book['author']}</td>";
        echo "<td>{$book['year']}</td>";
        echo "<td>{$book['genre']}</td>";
        echo "</tr>";
    }
    echo "</table>";
}

// Function to calculate the sum of an array
function calculateSum($array){
    $sum=0;
    foreach($array as $num){
        $sum+=$num;
    }
    return $sum;
}
?>
