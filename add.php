<?php 
include 'includes/functions.php';

if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $studentID = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];  

    $pdo = connectToDatabase();


    $query = "INSERT INTO contacts (id, name, email, phone) 
    VALUES (:id, :name, :email, :phone)";

    $statement = $pdo->prepare($query);
    
    // Binding parameters to prevent SQL injection
    $statement->bindParam(':id', $id);  
    $statement->bindParam(':name', $name);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':phone', $phone);

    $statement->execute();
    
    header('Location: index.php');
    exit;
}

include 'views/add.view.php';

