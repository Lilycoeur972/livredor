<?php 
 var_dump ($_POST);
    include ("config.php");
?>
   <a href="/pages/edit.php"> editer </a> </br>
<?php
    
    
    // connection de ma base de données "livredor".
    


    // Ma requête de lecture de la table message.
    // Sélectionnertous les champs(*) de la table message.
    
    $result = $mysqli->query("SELECT *  FROM messages");

    //var_dump ($result);

    foreach ($result as $rowMessage) {
        /* Processing of the data retrieved from the database */
       // Traitement des données récupérer depuis   la base de données
      

       echo $rowMessage["nom"]."</br>" ;
    }

   // echo $stagiaires[0]["prenom"];

   // echo $stagiaires[]

    
    echo"index de mon livre d'or ";
    
?>

<form method= "post"
 action="/pages/edit.php">

 <!-- mon formulaire -->

 <STRONG>CONVIVE</STRONG> </br>

 <input type="text" name ="nom"/></br>

 <input type="submit" values="envoyer">

</form>