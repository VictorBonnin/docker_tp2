<?php
$servername = "data"; // Le nom du container MariaDB
$username = "user";
$password = "password";
$dbname = "mydb";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Créer une table si elle n'existe pas déjà
$sql = "CREATE TABLE IF NOT EXISTS visitors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql);

// Insertion de données
$sql = "INSERT INTO visitors (id) VALUES (NULL)";
$conn->query($sql);

// Lecture des données
$sql = "SELECT * FROM visitors";
$result = $conn->query($sql);

// Afficher les résultats
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Visit Time: " . $row["visit_time"]. "<br>";
    }
} else {
    echo "0 results";
}

// Fermer la connexion
$conn->close();
?>