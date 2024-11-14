<?php
$servername = "mysql-db";
$username = "root";
$password = "motdepasse";
$dbname = "ma_base_de_donnees";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        echo "<h1>Liste des utilisateurs</h1><ul>";
        // Afficher les données de chaque ligne
        while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["nom"] . " - " . $row["email"] . "</li>";
        }
        echo "</ul>";
} else {
        echo "0 résultats";
}
$conn->close();
?>