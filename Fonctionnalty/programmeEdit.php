<?php


include_once("../config/db.php");   
 
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID de l'événement non spécifié ou invalide.");
}

$programmeId = intval($_GET['id']);

$reqProgramme = $con->prepare("SELECT * FROM programme WHERE id = :id");
$reqProgramme->execute([':id' => $programmeId]);
$programme = $reqProgramme->fetch(PDO::FETCH_ASSOC);


if (!$programme) {
    die("Événement non trouvé.");
}



// Vérifier si le formulaire a été soumis
if (isset($_POST['submitPro'])) {
    // Récupérer les données du formulaire
    $id = intval($_POST['id']);
    $date = htmlspecialchars($_POST['date']);
    $timeStart = htmlspecialchars($_POST['time']);
    $timeEnd = htmlspecialchars($_POST['timeEnd']);
    $lieu = htmlspecialchars($_POST['lieu']);
    $activity = htmlspecialchars($_POST['activity']);

    // Vérifions si les champs ne sont pas vides
    if (!empty($date) && !empty($timeStart) && !empty($timeEnd) && !empty($lieu) && !empty($activity)) {
        // Mettre à jour le programme dans la base de données
        try {
            $reqUpdate = $con->prepare("
                UPDATE programme
                SET date = :date, heureStart = :heureStart, heureEnd = :heureEnd, lieu = :lieu, activity = :activity
                WHERE id = :id
            ");
            $reqUpdate->execute([
                ':date' => $date,
                ':heureStart' => $timeStart,
                ':heureEnd' => $timeEnd,
                ':lieu' => $lieu,
                ':activity' => $activity,
                ':id' => $id
            ]);

            // Rediriger vers la page des programmes avec un message de succès
            header("Location: programmes.php?success=1");
            exit();
        } catch (PDOException $e) {
            // En cas d'erreur, rediriger avec un message d'erreur
            header("Location: programmes.php?error=1");
            exit();
        }
    } else {
        // Rediriger avec un message d'erreur si des champs sont vides
        header("Location: programmes.php?error=2");
        exit();
    }
} else {
    // Rediriger si le formulaire n'a pas été soumis
    header("Location: programmes.php");
    exit();
}
?>