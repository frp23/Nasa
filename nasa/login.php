<?php
require_once 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["loginUsername"]) && isset($_POST["loginPassword"])) {
        $username = $_POST["loginUsername"];
        $password = $_POST["loginPassword"];

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Accesso effettuato!";
            header("Location: index.php");
        } else {
            echo "Nome utente o password non validi.";
			header("Location: indexlog.php");
			
        }
    }
}

$conn->close();
?>
