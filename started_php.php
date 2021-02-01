<!-- template init -->
<?php
    //méthode d'inclusion
    include_once("./src/init.inc.php");
    print "\n";
?>
<!-- template head -->
<?php
    include_once("./src/header.inc.php");
    print "\n";
?>
<body>

	<header>
        <h1><?php print title.' '.$version ?></h1>
        <div class="icon" role="img">
            <img src="./asset/accessible.png" alt="icon accessible">
        </div>
    </header>
    <!-- template debug -->
    <p>
        <a href="started_php.php?civilite=femme" class="btn-primary">Femme</a><!--
--><a href="started_php.php?civilite=homme" class="btn-alert">Homme</a>
    </p>
    <!-- template main -->
	<?php

        include_once("./src/get_choix.inc.php")

         //include_once("./src/main.inc.php");
    ?>
    <?php
         //include_once("./src/produit.inc.php");
         //include_once("./src/fonction_base.php");
    ?>
    <!-- template footer -->
	<?php
         //include_once("./src/footer.inc.php");
    ?>
    <script src="./js/app.js"></script>
</body>
</html>