<?php
include 'db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification de l'utilisateur
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo "Connexion réussie !";
    } else {
        echo "E-mail ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Formulaire de connexion</h2>
    <form action="index.php" method="POST">
        <input type="email" name="email" placeholder="Adresse e-mail" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
