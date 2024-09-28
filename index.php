
<?php

include 'includes/functions.php';

// Connect to the database
$pdo = connectToDatabase();

// Query to select all contacts 
$query = 'SELECT * FROM contacts';

$statement = $pdo->prepare($query);
$statement->execute();

// Fetch all contact records
$contacts = $statement->fetchAll(PDO::FETCH_ASSOC);


include 'views/index.view.php';
?>
