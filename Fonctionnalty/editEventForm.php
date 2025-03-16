<?php
include_once("../config/db.php");



// Vérifier si l'ID est présent dans l'URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID de l'événement non spécifié ou invalide.");
}

// Récupérer l'ID de l'événement
$eventId = intval($_GET['id']);

// Récupérer les données de l'événement avant d'afficher le formulaire
$reqEvent = $con->prepare("SELECT * FROM eventaction WHERE id = :id");
$reqEvent->execute([':id' => $eventId]);
$event = $reqEvent->fetch(PDO::FETCH_ASSOC);

// Vérifier si l'événement existe
if (!$event) {
    die("Événement non trouvé.");
}

// Traitement du formulaire de modification
if (isset($_POST['submitEvent'])) {
    // Récupérer les données du formulaire
    $id = intval($_POST['id']);
    $title = htmlspecialchars($_POST['title']);
    $shortEvent = htmlspecialchars($_POST['shortEvent']);
    $detailEvent = htmlspecialchars($_POST['detailEvent']);

    // Gestion de l'upload de l'image (si une nouvelle image est fournie)
    if ($_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['photo']['tmp_name'];
        $fileName = $_FILES['photo']['name'];
        $fileSize = $_FILES['photo']['size'];
        $fileType = $_FILES['photo']['type'];

        // Valider le type de fichier (uniquement les images)
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($fileType, $allowedTypes)) {
            // Valider la taille du fichier (par exemple, 5 Mo maximum)
            $maxFileSize = 5 * 1024 * 1024; // 5 Mo
            if ($fileSize <= $maxFileSize) {
                // Générer un nom de fichier unique
                $newFileName = uniqid('', true) . '.' . pathinfo($fileName, PATHINFO_EXTENSION);

                // Définir le dossier de destination
                $uploadDir = '../uploads/';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0755, true); // Crée le dossier s'il n'existe pas
                }

                // Déplacer le fichier uploadé
                $destPath = $uploadDir . $newFileName;
                if (move_uploaded_file($fileTmpPath, $destPath)) {
                    // Mettre à jour l'événement dans la base de données avec la nouvelle image
                    $reqUpdate = $con->prepare("
                        UPDATE eventaction
                        SET titleEvent = :title, shortEvent = :shortEvent, detailEvent = :detailEvent, imgCover = :imgCover
                        WHERE id = :id
                    ");
                    $reqUpdate->execute([
                        ':title' => $title,
                        ':shortEvent' => $shortEvent,
                        ':detailEvent' => $detailEvent,
                        ':imgCover' => $destPath,
                        ':id' => $id
                    ]);

                    echo "L'événement a été mis à jour avec succès !";
                } else {
                    echo "Une erreur s'est produite lors de l'upload de l'image.";
                }
            } else {
                echo "La taille du fichier dépasse la limite autorisée (5 Mo).";
            }
        } else {
            echo "Seuls les fichiers JPEG, PNG et GIF sont autorisés.";
        }
    } else {
        // Mettre à jour l'événement sans changer l'image
        $reqUpdate = $con->prepare("
            UPDATE eventaction
            SET titleEvent = :title, shortEvent = :shortEvent, detailEvent = :detailEvent
            WHERE id = :id
        ");
        $reqUpdate->execute([
            ':title' => $title,
            ':shortEvent' => $shortEvent,
            ':detailEvent' => $detailEvent,
            ':id' => $id
        ]);

        header("Location: ../dashboard/index.php");
        $msgSuccess = "L'événement a été mis à jour avec succès !";

    }
}
?>

