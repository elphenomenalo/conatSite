<!-- Etablie la connexion avec la base de donnée -->

<?php

    try{
        
        $con = new PDO("mysql:host=localhost; dbname=jciTogo; charset=utf8", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
 
        // Récuppération de tous les données de l'utilisateur dans notre base de donnée

        $reqAllData = $con->prepare("SELECT * FROM userRegister");
        $reqAllData->execute();
        $users = $reqAllData->fetchAll(PDO::FETCH_ASSOC);

        // Réccupération des informations de l'article dans notre barre de recherche
        $reqAllDataEvent = $con->prepare("SELECT * FROM eventaction");
        $reqAllDataEvent->execute();
        $events = $reqAllDataEvent->fetchAll(PDO::FETCH_ASSOC);


        $reqAllDataProgramme = $con->prepare("SELECT * FROM programme");
        $reqAllDataProgramme ->execute();
        $programmes = $reqAllDataProgramme ->fetchAll(PDO::FETCH_ASSOC);
        
      

    }catch(Exception $e){
        echo "Erreur" .$e;
    }

?>