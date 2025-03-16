<?php
include_once("../config/db.php");

// Vérifier si l'ID est présent dans l'URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID de l'événement non spécifié ou invalide.");
}

// Récupérer l'ID de l'événement
$eventId = intval($_GET['id']);

// Supprimer l'événement de la base de données
try {
    $reqDelete = $con->prepare("DELETE FROM eventaction WHERE id = :id");
    $reqDelete->execute([':id' => $eventId]);

    // Rediriger vers la page des événements avec un message de succès
    header("Location: ../dashBoard/index.php");
    exit();
} catch (PDOException $e) {
    // En cas d'erreur, rediriger avec un message d'erreur
    header("Location: events.php?error=1");
    exit();
}
?>