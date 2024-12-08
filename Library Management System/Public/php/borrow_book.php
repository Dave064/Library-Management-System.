<?php
include('includes/db_connection.php');  // Include database connection

if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $user_id = 1; // Example user ID, replace with actual user ID from login session
    $borrow_date = date('Y-m-d');

    // Insert into borrow_records table
    $stmt = $conn->prepare("INSERT INTO borrow_records (book_id, user_id, borrow_date) VALUES (?, ?, ?)");
    $stmt->bind_param("iis", $book_id, $user_id, $borrow_date);
    $stmt->execute();

    // Decrease book quantity
    $stmt = $conn->prepare("UPDATE books SET quantity = quantity - 1 WHERE id = ?");
    $stmt->bind_param("i", $book_id);
    $stmt->execute();

    echo "Book borrowed successfully!";
    echo "<a href='view_books.php'>Back to Book List</a>";
} else {
    echo "Invalid book ID.";
}
?>
