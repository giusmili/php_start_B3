<?php
    $produit = ([
        "marque"=>"Laden",
        "Capacité"=>25,
        "Consommation"=> 100,
        "Prix"=>300, 
        "photo"=>"https://image.darty.com/gros_electromenager/lavage_sechage/lave-linge_ouverture_dessus/proline_ptl5511_n_t2010124878493A_151655576.jpg"
    ]);
    print "<ul>";
    foreach ($produit as $key => $value) {
        if($key!="photo"){ /* tester la propriété image*/
        print "<li>".$key." ".$value."</li>\n";
        }
        else{
            print "\n".'<li><img src="'.$value.'"></li>';
        }
    }
    print "</ul>";
?>