<?php
     try{
        $bdd = new PDO('mysql:host=localhost;dbname=article;charset=utf8','root','');

    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    //tester les champs
    if(isset($_POST['titre']) || isset($_POST['contenu'])){
        if(!$_POST['titre'] || !$_POST['contenu']){
            print "<p> Vous avez oublié votre titre ou vontenu</p>";
        }
        else{
            $date_public = date("Y-m-d H:i:s");
            //insertion
            $req = $bdd->prepare('INSERT INTO post(titre, contenu, date_creation)VALUES(?,?,?)');
            $req->execute(array(htmlentities($_POST['titre']), $_POST['contenu'], $date_public ));
            echo "<p>Post Insérer</p>";
        }

    }
?>