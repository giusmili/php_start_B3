<?php

const lang = ["html","css","php",1994,2021];

/*var_dump(lang);
$code = 7.5;
print "<br>";
gettype($code);
print_r(lang );*/

for($i = 0; $i < count(lang); $i++){
     print "<br>".($i+1)." : ".lang[$i];

}
//une autre façon de faire un tableau

$gamer = [
     0=>"Caroline",
     1=>"Mathieu",
     2=>"Paul",
     3=>"Julien"
];

print "\n";
print_r($gamer);

foreach ($gamer as $key => $index) {
    print "<br>";
    $key = $key + 1;
          print $key." ".$index;
}

//fusionner les tableaux
$print_out = array_merge($gamer,lang);
//print_r($print_out );

foreach ($print_out as $key => $index) {
     print "<br>";
     $key = $key + 1;
           print $key." ".$index;
 }

$tableau_gen = [];
$lang = "fr";
$code = 2021;
//ajouter des élément à un tableau
array_push($tableau_gen,$lang,$code);
print_r($tableau_gen);

/* produit 
     
     Marque : Laden
     Capacité : 25kg
     Consommation : 100 KW
     Prix : 300 €
     image : /

*/
/* 
tableau à 2 dimensions x,x 
 table_assoc = [
          [],
          []

 ]
*/
 $table_assoc = array(
          1=>array("code"=>"html","année"=>1990),
          2=>array("code"=>"php","année"=>1994),
          3=>array("code"=>"js","année"=>1995)
 );
 print_r( $table_assoc );

 foreach ($table_assoc as $key => $index) {
          foreach($index as $key_1=>$value){
               print "<br>".$key." ".$key_1." ".$value;
         }
 }

 //exemple final
 $i = 0; //exemple while
   while($i < count($tab)){
      
        print $i." ".$tab[$i]."<br>"; //afficher 
        $i++; //itérer
   }
   
   //exemple
   const user = [
       "nom"=>"Mili",
       "prenom" => "Gius",
       "mail"=>"giusmili67@gmail.com"
   ];
   print_r(user);
   foreach(user as $cle => $index){
       if($cle!="mail")
        print "<br>".$cle." ".$index."<br>";
       else{
            print '<br>'.$cle.' <a href="mailto:'.$index.'">Contact</a>'; 
       }
   }




?>
