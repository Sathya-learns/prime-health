<?php
// dashboard.php

include ("z_db.php");

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $heading = $_POST['heading'];
    $paragraph = $_POST['paragraph'];

    $stmt = $con->prepare("INSERT INTO content (heading, paragraph) VALUES (:heading, :paragraph)");
    $stmt->bindParam(':heading', $heading);
    $stmt->bindParam(':paragraph', $paragraph);

    if ($stmt->execute()) {
        echo "Content added successfully!";
    } else {
        echo "Error adding content.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Add New Heading and Paragraph</h1>
    <form method="POST" action="">
        <label for="heading">Heading:</label><br>
        <input type="text" id="heading" name="heading" required><br><br>

        <label for="paragraph">Paragraph:</label><br>
        <textarea id="paragraph" name="paragraph" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Upload</button>
    </form>
</body>
</html>