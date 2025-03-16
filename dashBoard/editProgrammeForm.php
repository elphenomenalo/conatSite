<?php
include_once("../config/db.php");
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger vers la page de connexion
    header("Location: login.php");
    exit();
}

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

if (isset($_POST['submitPro'])) {
    $id = intval($_POST['id']);
    $date = htmlspecialchars($_POST['date']);
    $timeStart = htmlspecialchars($_POST['timeStart']);
    $timeEnd = htmlspecialchars($_POST['timeEnd']);
    $lieu = htmlspecialchars($_POST['lieu']);
    $activity = htmlspecialchars($_POST['activity']);

    if (!empty($date) && !empty($timeStart) && !empty($timeEnd) && !empty($lieu) && !empty($activity)) {
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

            header("Location: index.php");
            exit();
        } catch (PDOException $e) {
            header("Location: programmes.php?error=1");
            exit();
        }
    } else {
        header("Location: programmes.php?error=2");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | EditEventForm</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="leading-loose">
        <form class="p-10 bg-white rounded shadow-xl" action="" method="POST">
            <input type="hidden" name="id" value="<?= $programme['id'] ?>">
            <div class="">
                <label class="block text-sm text-gray-600" for="date">Date</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="date" name="date" type="date" value="<?= htmlspecialchars($programme['date']) ?>">
            </div>
            <div class="">
                <label class="block text-sm text-gray-600" for="time">Heure de début</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="time" name="timeStart" type="time" value="<?= htmlspecialchars($programme['heureStart']) ?>">
            </div>
            <div class="">
                <label class="block text-sm text-gray-600" for="times">Heure de Fin</label>
                <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="times" name="timeEnd" type="time" value="<?= htmlspecialchars($programme['heureEnd']) ?>">
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="lieu">Lieu</label>
                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="lieu" name="lieu" rows="6" placeholder="Lieu.." style="height: 7vh;"><?= htmlspecialchars($programme['lieu']) ?></textarea>
            </div>
            <div class="mt-2">
                <label class=" block text-sm text-gray-600" for="activity">Activité</label>
                <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="activity" name="activity" rows="6" placeholder="Activité.." style="height: 10vh;"><?= htmlspecialchars($programme['activity']) ?></textarea>
            </div>
            <div class="mt-6">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" name="submitPro" type="submit">Modifier</button>
            </div>
        </form>
    </div>
</body>
</html>