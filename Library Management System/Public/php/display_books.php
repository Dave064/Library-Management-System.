<?php
include 'db_connect.php';

$sql = "SELECT id, title, author, genre, year, isbn FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Book List</h1>";
    echo "<table border='1'><tr><th>Title</th><th>Author</th><th>Genre</th><th>Year</th><th>ISBN</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["title"] . "</td><td>" . $row["author"] . "</td><td>" . $row["genre"] . "</td><td>" . $row["year"] . "</td><td>" . $row["isbn"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No books found.";
}

$conn->close();
?>
