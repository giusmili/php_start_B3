<?php
 $topTenLang = ([
    ["Python" => "Web & application"],
    ["C++" => "Application"],
    ["Node js" => "Web & application"],
    ["PHP" => "Web & application"]
 ]);

 /*$topTenLang = array(
        1=>array("Python" => "Web & application"),
        2=>array("C++" => "Application"),
        3=>array("Node js" => "Application"),
        4=>array("PHP" => "Web & application")
 );*/

    foreach ($topTenLang as $key => $index) {
        echo "<tr>";
        foreach ($index as $key_1 => $value) {
            $numClass = $key++; // pour indexer la clé primary de 1
            echo "<td>" . $key .  "</td>\n";
            echo "<td>" . $key_1 .  "</td>\n";
            echo "<td>" . $value .  "</td>\n";
        };
        echo "</tr>";
    };
?>
