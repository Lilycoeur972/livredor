<?php
    var_dump($_POST);

    include ("../config.php");


    if (isset($_POST["nom"])) {
        

        echo "Cette variable existe, donc je peux l'afficher.";
    
        //création de ma requête d'insertion 

        $queryinsert ="INSERT INTO `messages` (`id`, `nom`) VALUES (NULL, '".$_POST["nom"]."')" ;

        // Requête d'insertion :INSERT INTO `messages` (`id`, `nom`) VALUES (NULL, 'Robert');

        // Ceci est vrai, alors le texte est affiché


        // Exécution de ma requête d'insertion.

        if ($mysqli->query($queryinsert)){



            echo"requête exécuter avec succès";
        } 
    } else {

        echo "varaible n'existe pas";
        
    }
    
    
?>


    Edition
    


    
<a href="/index.php"> retour</a> </br>


