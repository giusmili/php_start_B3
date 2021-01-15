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
?>