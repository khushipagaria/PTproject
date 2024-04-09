<?php
include 'db_connection.php'; // Include your database connection script

// Query to retrieve artworks data from the database
$sql = "SELECT * FROM artworks";
$result = $conn->query($sql);
?>
