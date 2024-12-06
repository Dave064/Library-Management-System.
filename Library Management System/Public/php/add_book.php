<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);

    // Insert book into database
    $sql = "INSERT INTO books (title, author, genre, year, isbn) 
            VALUES ('$title', '$author', '$genre', '$year', '$isbn')";

    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
