<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["registerUsername"]) && isset($_POST["registerPassword"])) {
        $username = $_POST["registerUsername"];
        $password = $_POST["registerPassword"];

        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "User registered successfully!";
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
