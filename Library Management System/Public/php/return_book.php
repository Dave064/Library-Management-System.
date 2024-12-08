<?php
include('includes/db_connection.php');  // Include database connection

if (isset($_GET['book_id'])) {
    $book_id = $_GET['book_id'];
    $user_id = 1; // Example user ID, replace with actual user ID from login session
    $return_date = date('Y-m-d');

    // Update borrow_records table to set return date
    $stmt = $conn->prepare("UPDATE borrow_records SET return_date = ? WHERE book_id = ? AND user_id = ? AND return_date IS NULL");
    $stmt->bind_param("sii", $return_date, $book_id, $user_id);
    $stmt->execute();

    // Increase book quantity
    $stmt = $conn->prepare("UPDATE books SET quantity = quantity + 1 WHERE id = ?");
    $stmt->bind_param("i", $book_id);
    $stmt->execute();

    echo "Book returned successfully!";
    echo "<a href='view_books.php'>Back to Book List</a>";
} else {
    echo "Invalid book ID.";
}
?>
