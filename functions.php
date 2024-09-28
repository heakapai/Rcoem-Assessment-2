<?php

function connectToDatabase()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', 'Hea#Rcoem1401');
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}
?>