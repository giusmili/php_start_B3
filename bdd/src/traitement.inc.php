<?php
try{
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO("mysql:host=localhost;dbname=stock","root","",
array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$pdo_options));

//recuperer les données
$response = $bdd->query('SELECT * FROM `articles` WHERE 1');
//afficher les données
while($data = $response->fetch()){
    //print_r( json_encode($data));
    //afficher les données
    echo '<h2>'.$data['nom'].'</h2>
        <figure>
        <figcaption>
            <ul>
                <li>Marque '.$data['marque'].'</li>
                <li>Capacité '.$data['capacite'].' Kg</li>
                <li>Consommation '.$data['consommation'].' KW</li>
                <li>Prix '.$data['prix'].' &euro;</li>
                <li><img src="'.$data['image'].'"alt="produit"></li>
            </ul>
        </figcaption>
        </figure>';


    }

    $response->closeCursor();

}
//partie finale : affichage des erreurs 
catch(Exception $e){
    die("Erreurs type of : ".$e->getMessage());
}
?>