<!-- Etablie la connexion avec la base de donnée -->

<?php

    try{
        
        $con = new PDO("mysql:host=fdb1029.awardspace.net; dbname=4604518_jcitogo; charset=utf8", "4604518_jcitogo", "@Rodrigue@7");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
 
        // Récuppération de tous les données de l'utilisateur dans notre base de donnée

        $reqAllData = $con->prepare("SELECT * FROM userRegister");
        $reqAllData->execute();
        $users = $reqAllData->fetchAll(PDO::FETCH_ASSOC);

        // Réccupération des informations de l'article dans notre barre de recherche
        $reqAllDataEvent = $con->prepare("SELECT * FROM eventaction");
        $reqAllDataEvent->execute();
        $events = $reqAllDataEvent->fetchAll(PDO::FETCH_ASSOC);

        // Réccupération de tous les programmes
        $reqAllDataProgramme = $con->prepare("SELECT * FROM programme");
        $reqAllDataProgramme ->execute();
        $programmes = $reqAllDataProgramme ->fetchAll(PDO::FETCH_ASSOC);

        // Réccupération de tous les photos de la gallery
        $reqAllDataGallery = $con->prepare("SELECT * FROM gallery");
        $reqAllDataGallery ->execute();
        $galleries = $reqAllDataGallery ->fetchAll(PDO::FETCH_ASSOC);

        // Récuppération des tous les logos des partenaires
        $reqAllDataPartenar = $con->prepare("SELECT * FROM partenaire");
        $reqAllDataPartenar ->execute();
        $partenaires = $reqAllDataPartenar ->fetchAll(PDO::FETCH_ASSOC);

    }catch(Exception $e){
        echo "Erreur" .$e;
    }

?>