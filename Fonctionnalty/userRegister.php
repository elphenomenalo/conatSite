<?php

    // Inclure le fichier de configuration avec la base de donnée 
    include_once("config/db.php");

    // Vérifions si le formulaire a été soumis
    if(isset($_POST["userSubmit"])){
        // echo "Le formulaire a été envoyer";

        // Réccupération des données du formulaire
        $lastName = htmlspecialchars($_POST["lastName"]);
        $firstName = htmlspecialchars($_POST["firstName"]);
        $organization = htmlspecialchars($_POST["organization"]);
        $title = htmlspecialchars($_POST["title"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $message = htmlspecialchars($_POST["message"]);

        
        // Vérifions si tous les c,hamps ont été validé
        if(!empty($lastName) && !empty($firstName) && !empty($organization) && !empty($title) && !empty($email)
            && !empty($phone)
        ){
            // Vérifions si le format du numéro de téléphone est correcte
                $cleanPhone = preg_replace("/[^0-9]/", "", $phone);
                if(preg_match("/^\+?\d{8,15}$/", $cleanPhone)){

                     // Vérifions si le email existe déjà dans notre base de donnée 
            $checkEmailExist = $con->prepare("SELECT * FROM userRegister WHERE userEmail= :userEmail");
            $checkEmailExist->execute([
                ':userEmail' => $email
            ]);
            // Récuppération du résultat de la requête
            $requltReq = $checkEmailExist->fetch(PDO::FETCH_ASSOC);
            if($requltReq > 0){
                $msg = "Le email existe déjà!";
            }else{
                // Ici on passe à insertion des données dans notre base de donnée
                $reqInsertData  = $con->prepare("INSERT INTO userRegister (userlastename, userFirstname, userStatus, userEmail, userPhone, userMessage) VALUES (:userlastename, :userFirstname, :userStatus, :userEmail, :userPhone, :userMessage)");
                $reqInsertData->execute([
                    ':userlastename' => $lastName,
                    ':userFirstname' => $firstName,
                    ':userStatus' => $title,
                    ':userEmail' => $email,
                    ':userPhone' => $cleanPhone,
                    ':userMessage' => $message

                ]);

                $msgSuccess = "Inscription Validé. Merci!";
            }
                    
                }else{
                    $msg = "Le numéro de téléphone n'est pas valide";
                }
           
        }else{
            $msg = "Veuillez remplir tous les champs";
        }

        
    }

?>