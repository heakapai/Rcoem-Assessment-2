<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Student Information Form</title>
    <link
        rel="stylesheet"
        href="/pico.min.css"
    />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System </strong></li>
        </ul>
        <ul>
            <li><a href="/index.php">List Contacts</a></li>
            <li><a href="/add.php">Add Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Add Contacts</h1>
    <form method="post">
        <label for="id"> ID</label>
        <input type="text" id="id" name="id" required>
        
        <label for="name"> Name</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
        
        
        <input type="submit" value="Submit">
    </form>
</main>
</body>
</html>
