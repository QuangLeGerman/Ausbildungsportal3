<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];
$password = $_POST['Email'];

// Passwort sicher verschlüsseln
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prüfen, ob Benutzername schon existiert
$check = $conn->prepare("SELECT * FROM users WHERE username = ?");
$check->bind_param("s", $username);
$check->execute();
$result = $check->get_result();

if ($result->num_rows > 0) {
    echo "Benutzername bereits vergeben.";
} else {
    // Neuen Benutzer einfügen
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);
    
    if ($stmt->execute()) {
        echo "Registrierung erfolgreich! <a href='index.php'>Jetzt einloggen</a>";
    } else {
        echo "Fehler bei der Registrierung.";
    }
}
?>
