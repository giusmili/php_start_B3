<?php
    $_SESSION["code"] = 2021;
    
    if(isset($_GET['code'])){

        $code = $_GET['code'];


        if($code==$_SESSION["code"]){
            //print '<p>Bravo votre code est '.$code;
            print '<p>Bravo votre code est '.$code;
            
        }
        else{
            print '<p>Code erreur '.$code;
        }

    }
?>