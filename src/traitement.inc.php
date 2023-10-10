<?php
    //traitement
    if(isset($_GET['nom']) && isset($_GET['genre']) && isset($_GET['pays'])){
        //variables
        $nom = $_GET['nom'];
        $genre = $_GET['genre'];
        $pays = $_GET['pays'];
        if($nom){
            echo '<li>Nom : '.$nom.'</li><li>Genre : '.$genre.
            '</li><li> Pays : '.$pays.'</li>';
        }
        else{
            print '<li>Vous devez remplir les champs</li>';
        }
    }



?>