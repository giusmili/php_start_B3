<!-- template init -->
<?php
session_start();
$_SESSION["code"] = null;
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
    <main>
        <figure>
            <img src="https://i.imgur.com/uP89iHk.png" alt="code">
            <figcaption>
                <h2>Code?</h2>
            </figcaption>
        </figure>
        <?php 
        //print $_SERVER['PHP_SELF'];
        ?>
        <div class="form" role="region">
            <fieldset>
                <legend>Saisir le code</legend>
                <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
                <label for="code">Saisissez votre code?</label>
    <input type="text" name="code" placeholder="Votre code..." id="code" aria-required="true" autofocus>
    <input type="submit" value="Envoyer">
                </form>
            </fieldset> 
        </div>
        <?php
            include_once('./src/form.inc.php');
        ?>

    </main>
        <script src="./js/app.js"></script>
</body>
</html>