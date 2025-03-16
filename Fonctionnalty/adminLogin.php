<?php



// Activer les erreurs pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclure la connexion à la base de données
include_once("../config/db.php");

// Initialiser les variables
$error = "";
$success = "";

// Vérifier si le formulaire a été soumis
if (isset($_POST['login'])) {
    // Récupérer les données du formulaire
    $email = htmlspecialchars($_POST['email']);
    $password = $_POST['passwords'];

    // Valider les données
    if (empty($email) || empty($password)) {
        $error = "Tous les champs sont obligatoires.";
    } else {
        // Vérifier si l'utilisateur existe
        $reqCheckUser = $con->prepare("SELECT * FROM adminregister WHERE email = :email");
        $reqCheckUser->execute([':email' => $email]);
        $user = $reqCheckUser->fetch();

        if ($user) {
            // Vérifier le mot de passe
            if (password_verify($password, $user['password'])) {
                // Démarrer une session et stocker les informations de l'utilisateur
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Rediriger vers le tableau de bord
                header("Location: ../dashBoard/index.php");
                exit();
            } else {
                $error = "Mot de passe incorrect.";
            }
        } else {
            $error = "Aucun utilisateur trouvé avec cet email.";
        }
    }
}

// Afficher un message de succès après une inscription réussie
if (isset($_GET['success'])) {
    $success = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
}
?>