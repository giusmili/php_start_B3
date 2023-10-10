<?php
    $produit = ([
        "Marque"=>"Laden",
        "Capacité"=>25,
        "Consommation"=> 100,
        "Prix"=>450, 
        "photo"=>"./asset/machine.png"
    ]);
    print "<ul>";
        foreach ($produit as $key => $value) {
            $key === "Prix" ? print "<li>".$key." ".$value." &euro;</li>\n" : 
            false; //ajouter euros

                if($key!="photo"){ /* tester la propriété image*/
                print "<li>".$key." ".$value."</li>\n";
                }
                else{
                    print "\n".'<li><img src="'.$value.'"></li>';
                }

        }
    print "</ul>";
?>