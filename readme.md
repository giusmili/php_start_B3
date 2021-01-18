# Cours php &amp; mySQL

```php
const msg = "Cours php &amp; mySQL"
    <?php 
        print $msg
        
        //printOut => Cours php &amp; mySQL
    ?>
```
Pour commencer voici ce qu'il faut faire au début de votre projet

***
```html
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <title>Cours PHP</title>
    </head>
    <body>
        <header>
        <h1>PHP Started!</h1> 
        </header>
        <main>
            <!--contenu-->
        </main>   
    

    </body>

</html>
```
## Voir dans ce cours
* Historique php
* L'environnement Apache
* Créer son répertoire de développement
* la syntaxe PHP
* Création d'una page dynammique
* Les méthodes de gestion
* Les variables
* Les tableaux

## Les tableaux clé, valeur
```php
    //exemple 
    $produit = ([
        "marque"=>"Laden",
        "Capacité"=>25,
        "Consommation"=> 100,
        "Prix"=>300, 
        "photo"=>"https://image.darty.com/gros_electromenager/lavage_sechage/lave-linge_ouverture_dessus/proline_ptl5511_n_t2010124878493A_151655576.jpg"
    ]);

    //itération du tableau
     foreach ($produit as $key => $value) {
        print "\n".$key." ".$value;
    }

```






