<?php
// Activer les erreurs pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclure la connexion à la base de données
include_once("../config/db.php");

// Initialiser la variable d'erreur
$error = "";

// Vérifier si le formulaire a été soumis
if (isset($_POST['register'])) {
    // Récupérer les données du formulaire
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['passwords'];

    // Valider les données
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Tous les champs sont obligatoires.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "L'adresse email n'est pas valide.";
    } elseif ($password !== $confirm_password) {
        $error = "Les mots de passe ne correspondent pas.";
    } else {
        // Vérifier si l'utilisateur existe déjà
        $reqCheckUser = $con->prepare("SELECT * FROM users WHERE email = :email OR username = :username");
        $reqCheckUser->execute([':email' => $email, ':username' => $username]);
        $userExists = $reqCheckUser->fetch();

        if ($userExists) {
            $error = "Cet email ou nom d'utilisateur est déjà utilisé.";
        } else {
            // Hasher le mot de passe
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insérer l'utilisateur dans la base de données
            try {
                $reqInsertUser = $con->prepare("
                    INSERT INTO adminregister (username, email, password)
                    VALUES (:username, :email, :password)
                ");
                $reqInsertUser->execute([
                    ':username' => $username,
                    ':email' => $email,
                    ':password' => $hashed_password
                ]);

                // Rediriger vers la page de connexion
                header("Location: login.php?success=1");
                exit();
            } catch (PDOException $e) {
                $error = "Erreur lors de l'inscription : " . $e->getMessage();
            }
        }
    }
}
?>