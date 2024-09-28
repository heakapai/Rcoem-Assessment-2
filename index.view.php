
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Dev Course</title>
    <link rel="stylesheet" href="/pico.min.css" />
</head>
<body>
<header class="container">
    <nav>
        <ul>
            <li><strong>Contact Management System</strong></li>
        </ul>
        <ul>
            <li><a href="/index.php">List of Contacts </a></li>
            <li><a href="/add.php">Add Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container">
    <h1>Contacts</h1>
    <table>
        <tr>
            <th> ID</th>
            <th> Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Actions</th> <!-- Added Actions Column for Delete -->
        </tr>
        <?php foreach ($contacts as $contact) : ?>
        <tr>
            <td><?= htmlspecialchars($contact['id']); ?></td>
            <td><?= htmlspecialchars($contact['name']); ?></td>
            <td><?= htmlspecialchars($contact['email']); ?></td>
            <td><?= htmlspecialchars($contact['phone']); ?></td>
            <td>
                <!-- Delete link -->
                <a href="delete.php?id=<?= $contact['id']; ?>" onclick="return confirm('Are you sure you want to delete this contact?');" title="Delete Contact">
                    Delete
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</main>
</body>
</html>
