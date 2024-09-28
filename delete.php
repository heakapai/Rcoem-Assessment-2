
<?php
include 'includes/functions.php'; 

// Check if 'id' is set in the URL (which represents the contact's ID)
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pdo = connectToDatabase();

    // Prepare the DELETE query
    $query = 'DELETE FROM contacts WHERE id = :id';
    $statement = $pdo->prepare($query);
    $statement->bindParam(':id', $id, PDO::PARAM_INT);

    // Execute the delete statement
    if ($statement->execute()) {
        // Redirect back to index.php after successful deletion
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting contact.";
    }
}
?>
