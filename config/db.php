<!-- Etablie la connexion avec la base de donnée -->

<?php

    try{
        
        $con = new PDO("mysql:host=localhost; dbname=jciTogo; charset=utf8", "root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        // echo "Connexion établie avec la base de donnée";
         // Récuppération de tous les données dans notre base de donnée

        $reqAllData = $con->prepare("SELECT * FROM userRegister");
        $reqAllData->execute();
        $users = $reqAllData->fetchAll(PDO::FETCH_ASSOC);

    }catch(Exception $e){
        echo "Erreur" .$e;
    }

?>