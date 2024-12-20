<?php
include 'db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 

    
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Inscription réussie !";
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <h2>Formulaire d'inscription</h2>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Nom d'utilisateur" required><br>
        <input type="email" name="email" placeholder="Adresse e-mail" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>
