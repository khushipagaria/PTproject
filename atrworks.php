<?php

$conn = new mysqli('localhost', 'root', '', 'artworks');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM artworks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Title: " . $row["title"]. "<br>";
        echo "Description: " . $row["description"]. "<br>";
        echo "Image Path: " . $row["image_path"]. "<br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
