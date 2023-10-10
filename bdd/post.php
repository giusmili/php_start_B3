<?php
    include_once("./src/head.inc.php");

?>
<body>
    <header>
        <h1>Publications</h1>
    </header>
    <main>
        <div class="form" role="region">
            <fieldset>
                <legend>Poster vos publications</legend>
                <?php
                    include_once('./src/post.inc.php'); 
                ?>
                <form action="post.php" method="post">
                    <label for="titre">Saisir un titre</label>
                    <input type="text" name="titre" id="titre" placeholder="Votre titre" autofocus>
                    <label for="com">Insérer un commentaire</label>
                    <textarea name="contenu" id="com" placeholder="commentaire"></textarea>
                    <input type="submit" value="Poster votre article">

                </form>
            </fieldset>
        </div>

    </main>
    <footer>
<?php
    include_once("./src/footer.inc.php");

?>
</footer>
</body>