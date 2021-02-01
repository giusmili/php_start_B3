<?php
    // combien de fonction on peut compter
    function def(){
        $nom = "Ledorf";
        $prenom = "Rasmus";
        $nav = $_SERVER['HTTP_USER_AGENT'];
        echo "<p>Je m'appalle : ", $nom, " ", $prenom,
        " Vous êtes sur ", $nav, "</p>";
    }
    $print_out = def();
    // function param
    function userWeb($nom, $prenom, $date){
        echo  "<p> je m'appelle : ", $nom,
        " ", $prenom, "<br> Message du :", $date, "</p>";
    }
    userWeb("Berners","Lee",date("d/M/Y"));

    function calc($n){
        return $n * $n;
    }

    $result = calc(5);
    print "<p>le résultat est ".$result."</p>";
    //function anomyme

    $message = function($message){
        return "<p>Voici le message : ".$message."</p>";
    };
    print $message('Ceci est une fonction anonyme');

    //function printf()
    function printout(){
        print(sprintf("%s ","Hello"));
        print sprintf("%d ", 5.8);
    }
    print "<p><code>";
        print printout();
    print "</code></p>";   
    // fonction fleché
    
   
    



?>