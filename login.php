<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Passwort prüfen
    if (password_verify($password, $user['password'])) {
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Falsches Passwort.";
    }
} else {
    echo "Benutzer nicht gefunden.";
}
?>