<?php


include_once("../config/db.php");
if (isset($_POST["submitPro"])) {
    // Réccupération des données du formulaire
    $date = htmlspecialchars($_POST["date"]);
    $timeStart = htmlspecialchars($_POST["time"]);
    $timeEnd = htmlspecialchars($_POST["timeEnd"]);
    $lieu = htmlspecialchars($_POST["lieu"]);
    $activity = htmlspecialchars($_POST["activity"]);

    // Vérifions si les champs ne sont pas vides 
    if (!empty($date) && !empty($timeStart) && !empty($timeEnd) && !empty($lieu) && !empty($activity)) {
        // Validation des données
        if (!preg_match("/^\d{4}-\d{2}-\d{2}$/", $date)) {
            $errorMsg = "Format de date invalide.";
        } elseif (!preg_match("/^\d{2}:\d{2}$/", $timeStart)) {
            $errorMsg = "Format de l'heure de début invalide.";
        } elseif (!preg_match("/^\d{2}:\d{2}$/", $timeEnd)) {
            $errorMsg = "Format de l'heure de fin invalide.";
        } else {
            // Traitement des données (enregistrement dans la base de données)
            try {

                $reqInsert = $con->prepare("
                    INSERT INTO programme (date, heureStart, heureEnd, lieu, activity)
                    VALUES (:date, :heureStart, :heureEnd, :lieu, :activity)
                ");
                $reqInsert->execute([
                    ':date' => $date,
                    ':heureStart' => $timeStart,
                    ':heureEnd' => $timeEnd,
                    ':lieu' => $lieu,
                    ':activity' => $activity
                ]);

                echo "Les données ont été enregistrées avec succès !";
            } catch (PDOException $e) {
                $errorMsg = "Erreur lors de l'enregistrement des données : " . $e->getMessage();
            }
        }
    } else {
        $errorMsg = "Veuillez remplir tous les champs";
    }

    if (isset($errorMsg)) {
        echo $errorMsg;
    }
} else {
    $errorMsg = "Veuillez remplir tous les champs";
}
