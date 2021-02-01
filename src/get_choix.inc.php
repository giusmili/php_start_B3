<?php
    if(isset($_GET['civilite'])){
        $civ = $_GET['civilite'];
       
        echo $civ == "femme" ? 
            '<figure>
                <img src="./asset/femme.png" alt="'.$civ.'">
                <figcaption>
                    <h2>'.$civ.'</h2>
                </figcaption>'
            
            : '<figure>
                <img src="./asset/homme.png" alt="'.$civ.'">
                <figcaption>
                    <h2>'.$civ.'</h2>
                </figcaption></figure>';
    }
    else{
        print "<p>Faites un choix</p>";
    }
?>