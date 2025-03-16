<?php


// Activer les erreurs PHP pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Inclure la connexion à la base de données
include_once("../config/db.php");

// Vérifier si le formulaire a été soumis
if (isset($_POST['submitlogo'])) {
    // Récupérer les données du formulaire
    $title = htmlspecialchars($_POST['title']);
    $photo = $_FILES['photo'];

    // Valider les données
    if (empty($title) || empty($photo['name'])) {
        die("Veuillez remplir tous les champs.");
    }

    // Vérifier si le fichier est une image
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($photo['type'], $allowedTypes)) {
        die("Seuls les fichiers JPEG, PNG et GIF sont autorisés.");
    }

    // Vérifier la taille du fichier (par exemple, 5 Mo maximum)
    $maxSize = 5 * 1024 * 1024; // 5 Mo
    if ($photo['size'] > $maxSize) {
        die("La taille du fichier ne doit pas dépasser 5 Mo.");
    }

    // Générer un nom unique pour l'image
    $photoName = uniqid() . '_' . basename($photo['name']);
    $uploadDir = '../partenaire/'; // Dossier de destination
    $photoPath = $uploadDir . $photoName;

    // Créer le dossier de destination s'il n'existe pas
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Déplacer le fichier téléversé vers le dossier de destination
    if (move_uploaded_file($photo['tmp_name'], $photoPath)) {
        // Enregistrer les informations dans la base de données
        try {
            $reqInsert = $con->prepare("
                INSERT INTO partenaire (title, photo)
                VALUES (:title, :photo)
            ");
            $reqInsert->execute([
                ':title' => $title,
                ':photo' => $photoName
            ]);

            // Rediriger avec un message de succès
            header("Location: ../dashBoard/index.php");
            exit();
        } catch (PDOException $e) {
            die("Erreur lors de l'enregistrement dans la base de données : " . $e->getMessage());
        }
    } else {
        die("Une erreur s'est produite lors du téléversement du fichier.");
    }
}
?>