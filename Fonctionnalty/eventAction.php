<?php
include_once("../config/db.php");

// Vérifions si le formulaire a été envoyé
if (isset($_POST["submitEvent"])) {



    // Récupération des données du formulaire
    $title = htmlspecialchars($_POST["title"]);
    $shortMessage = htmlspecialchars($_POST["shortEvent"]);
    $detailEvent = htmlspecialchars($_POST["detailEvent"]);

    // Vérifions si les champs ne sont pas vides
    if (!empty($title) && !empty($shortMessage) && !empty($_FILES["photo"]) && !empty($detailEvent)) {
        // Gestion de l'upload de l'image

        $imageCover = $_FILES["photo"];

        // Vérifier si l'upload s'est bien passé

        if ($imageCover['error'] === UPLOAD_ERR_OK) {
            // Informations sur le fichier uploadé

            $fileTmpPath = $imageCover['tmp_name']; 
            $fileName = $imageCover['name']; 
            $fileSize = $imageCover['size']; 
            $fileType = $imageCover['type']; 

            // Valider le type de fichier
            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
            if (in_array($fileType, $allowedTypes)) {
                // Valider la taille du fichier (par exemple, 5 Mo maximum)
                $maxFileSize = 5 * 1024 * 1024;
                if ($fileSize <= $maxFileSize) {

                    // Générer un nom de fichier unique pour éviter les conflits
                    $newFileName = uniqid('', true) . '.' . pathinfo($fileName, PATHINFO_EXTENSION);

                    // Définir le dossier de destination

                    $uploadDir = '../EventPhoto/'; 
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0755, true);
                    }

                    // Déplacer le fichier uploadé vers le dossier de destination
                    $destPath = $uploadDir . $newFileName;
                    if (move_uploaded_file($fileTmpPath, $destPath)) {

                        // Enregistrer les données dans la base de données
                        
                        try {
                            $reqInsertEvent = $con->prepare("
                                INSERT INTO eventACTION (titleEvent, shortEvent, imgCover, detailEvent)
                                VALUES (:titleEvent, :shortEvent, :imgCover, :detailEvent)
                            ");
                            $reqInsertEvent->execute([
                                ':titleEvent' => $title,
                                ':shortEvent' => $shortMessage,
                                ':imgCover' => $destPath, 
                                ':detailEvent' => $detailEvent
                            ]);

                            $msgSuccess = "L'événement a été créé avec succès !";
                        } catch (PDOException $e) {
                            $msgError = "Erreur lors de l'enregistrement dans la base de données : " . $e->getMessage();
                        }
                    } else {
                        $msgError = "Une erreur s'est produite lors de l'upload de l'image.";
                    }
                } else {
                    $msgError = "La taille du fichier dépasse la limite autorisée (5 Mo).";
                }
            } else {
                $msgError = "Seuls les fichiers JPEG, PNG et GIF sont autorisés.";
            }
        } else {
            $msgError = "Une erreur s'est produite lors de l'upload de l'image.";
        }
    } else {
        $msgError = "Veuillez remplir tous les champs.";
    }
}
?>