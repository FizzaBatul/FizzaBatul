
<?php
//Q#1:
//Variables and Constants
//=======================================================================================
//Define variables for storing library information like the name, address, and total number of books.
echo "Q1 <br>";
$library_name = "Kiet Library";
$library_address = "123 street main, Karachi";
$library_books = 200; // Should be an integer

//Define constants for library open and close times.
const LIB_OPEN_TIMING = "9:00 AM";
const LIB_CLOSE_TIMING = "3:30 PM";

//Use variables and constants appropriately throughout the application.
echo "Welcome to " . $library_name . " located at " . $library_address . ".<br>";
echo "We have a total of " . $library_books . " books available.<br>";
echo "Our library opens at " . LIB_OPEN_TIMING . " and closes at " . LIB_CLOSE_TIMING . ".<br>";
echo "<br>";
//=======================================================================================
//Q#2:
//Data Types
//Use different data types for various information. For example, strings for names, integers for numbers, and arrays for storing multiple books.
//=======================================================================================
//String for name
echo "Q2 <br>";

$string_name = "Fizza batool";

//Integers for numbers:
$int_no = 5000;

//Arrays for storing multiple books:
$Books = array(
    array(
        "Title" => "PHP",
        "Author" => "W Jason Gilmore",
        "Year" => 2003,
        "genre" => "Fiction",
        "available" => true
    ),
    array(
        "Title" => "Javascript",
        "Author" => "David Herman",
        "Year" => 2000,
        "genre" => "Dystopian",
        "available" => true
    )
);

echo "String name is " . $string_name . "<br>";
echo "<br>";
echo "Integer number is " . $int_no . "<br>";
echo "<br>";
echo "<br>";
echo "***Books Available***<br>";
echo "<br>";
foreach ($Books as $book) {
    echo "<br>";
    echo "Title: " . $book["Title"] . "<br>";
    echo "Author: " . $book["Author"] . "<br>";
    echo "Year: " . $book["Year"] . "<br>";
}
echo "<br>";

//=======================================================================================
//Q#3:
//Operators
//Use arithmetic operators to calculate the total number of books.
//Use assignment operators to assign values to variables.
//Implement increment and decrement operators to update the number of available books.
//Use string operators to concatenate book details.
//=======================================================================================
//Use assignment operators to assign values to variables.
echo "Q3 <br>";

$total_books = 5000;
$purchased_books = 1000;
$books_borrowed = 500;
$books_returned = 300;

//Use arithmetic operators to calculate the total number of books.
$total = $total_books + $purchased_books - $books_borrowed + $books_returned;
echo "Total number of books after transactions: " . $total . "<br>";
echo "<br>";
//======================================================================================
//Q#4:
//Conditional Statements
//Use if and else conditions to check if the library is open or closed based on the current time.
//Use else if to provide additional checks for special events or holidays.
//Use a switch statement to categorize books by genre.

echo "Q4 <br>";

 function convertTo24HourFormat($time) {
    return date("H:i", strtotime($time));
}
$current_time = date("H:i");
$open_time = convertTo24HourFormat(LIB_OPEN_TIMING);
$close_time = convertTo24HourFormat(LIB_CLOSE_TIMING);

if ($current_time >= $open_time && $current_time <= $close_time) {
    $lib_status = "open";
    echo "Library is currently " . $lib_status . ".<br>";
} else {
    $lib_status = "closed";
    echo "Library is currently " . $lib_status . ".<br>";
}

$day = "holiday";

if ($day == "holiday") {
    echo "Library is closed for a holiday.<br>";
} elseif ($day == "special event") {
    echo "Library is open for a special event.<br>";
}

foreach ($Books as $book) {
    echo "<br>";
    $bookDetails = "Title: " . $book["Title"] . "<br>";
    $bookDetails .= "Author: " . $book["Author"] . "<br>";
    $bookDetails .= "Year: " . $book["Year"] . "<br>";

    switch ($book["genre"]) {
        case "Fiction":
            $bookDetails .= "Genre: Fiction<br>";
            break;
        case "Dystopian":
            $bookDetails .= "Genre: Dystopian<br>";
            break;
        default:
            $bookDetails .= "Genre: Unknown<br>";
    }
    echo $bookDetails;
}

echo "<br>";

//==================================================================================================
//Q#5:
//Logical Operators
//Use logical operators to combine multiple conditions for complex checks, such as verifying if a book is available and the library is open.

echo "Q5 <br>";

foreach ($Books as $book) {
    $bookDetails = "Title: " . $book["Title"] . "<br>";
    $bookDetails .= "Author: " . $book["Author"] . "<br>";
    $bookDetails .= "Year: " . $book["Year"] . "<br>";
    $bookDetails .= ($book["available"] && $lib_status === "open") ? "Status: Available<br>" : "Status: Not Available<br>";
    echo $bookDetails;
}

echo "<br>";

//=======================================================================================
//Q#6:
//Loops
//Use loops to display the list of all books in the library.
//Use loops to search for a book by title or author.

echo "Q6 <br>";

$searchTerm = "David Herman"; // Example search term
$searchResults = array();

echo "Search Results for '" . $searchTerm . "':<br>";
foreach ($Books as $book) {
    if (stripos($book["Title"], $searchTerm) !== false || stripos($book["Author"], $searchTerm) !== false) {
        $searchResults[] = $book;
    }
}

// Displaying search results
if (!empty($searchResults)) {
    foreach ($searchResults as $book) {
        $bookDetails = "Title: " . $book["Title"] . "<br>";
        $bookDetails .= "Author: " . $book["Author"] . "<br>";
        $bookDetails .= "Year: " . $book["Year"] . "<br>";
        echo $bookDetails;
    }
} else {
    echo "No books found for the search term '" . $searchTerm . "'.<br>";
}

echo "<br>";

//=======================================================================================
//Q#7:
//Ternary Operator
//Use the ternary operator to simplify conditional statements, such as setting a default message if no books are found.

echo "Q7 <br>";

echo "Teernary operator <br>";
$bookDetails = ($Books[0]["available"] && $lib_status === "open") ? "Status: Available" : "Status: Not Available";
echo $bookDetails . "<br>";

//=======================================================================================
//Q#8:
//Coalescing operator:
//Use the null coalescing operator to handle cases where optional form fields may be left empty.
echo "<br>";
echo "Q8 <br>";

$book = array(
    "Title" => "New Book",
    "Author" => null,
    "Year" => 2021
);
$booktitle = $book["Title"] ?? "Unknown Title";
$bookauthor = $book["Author"] ?? "Unknown Author";
$bookyear = $book["Year"] ?? "Unknown Year";

echo "<br>";
echo "Book Details:<br>";
echo "Title: " . $booktitle . "<br>";
echo "Author: " . $bookauthor . "<br>";
echo "Year: " . $bookyear . "<br>";

//=======================================================================================
//Q#9:
//HTML with PHP
//Create an HTML form to add a new book. The form should collect the book's title, author, genre, and publication year.
//Create an HTML form to search for books by title or author.

$addedBook = null;
$searchResults = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $author = $_POST['author'] ?? '';
    $genre = $_POST['genre'] ?? '';
    $year = $_POST['year'] ?? '';

    if ($title && $author && $genre && $year) {
        $addedBook = [
            "Title" => $title,
            "Author" => $author,
            "Genre" => $genre,
            "Year" => $year
        ];
        $Books[] = $addedBook; // Add book to library
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_query'])) {
    $search_query = trim($_GET['search_query']);

    foreach ($Books as $book) {
        if (stripos($book["Title"], $search_query) !== false || stripos($book["Author"], $search_query) !== false) {
            $searchResults[] = $book;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Library Management</title>
</head>
<body>
    <h2>Add a New Book</h2>
    <form action="" method="post">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br><br>

        <label for="author">Author:</label><br>
        <input type="text" id="author" name="author" required><br><br>

        <label for="genre">Genre:</label><br>
        <input type="text" id="genre" name="genre" required><br><br>

        <label for="year">Publication Year:</label><br>
        <input type="number" id="year" name="year" required><br><br>

        <input type="submit" value="Add Book">
    </form>

    <?php if ($addedBook): ?>
        <h2>Book Added Successfully</h2>
        <p><strong>Title:</strong> <?php echo $addedBook['Title']; ?></p>
        <p><strong>Author:</strong> <?php echo $addedBook['Author']; ?></p>
        <p><strong>Genre:</strong> <?php echo $addedBook['Genre']; ?></p>
        <p><strong>Publication Year:</strong> <?php echo $addedBook['Year']; ?></p>
    <?php endif; ?>

    <h2>Search for Books</h2>
    <form action="" method="get">
        <label for="search">Search by Title or Author:</label><br>
        <input type="text" id="search" name="search_query" required><br><br>
        <input type="submit" value="Search">
    </form>

    <?php if (!empty($searchResults)): ?>
        <h2>Search Results</h2>
        <?php foreach ($searchResults as $book): ?>
            <p><strong>Title:</strong> <?php echo $book['Title']; ?></p>
            <p><strong>Author:</strong> <?php echo $book['Author']; ?></p>
            <p><strong>Year:</strong> <?php echo $book['Year']; ?></p>
        <?php endforeach; ?>
    <?php elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search_query'])): ?>
        <p>No books found for the search term '<?php echo htmlspecialchars($_GET['search_query']); ?>'.</p>
    <?php endif; ?>
</body>
</html>
