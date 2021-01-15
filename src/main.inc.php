<main>
	<section>
		<h2>Nous sommes le : <?php print date("d/m/Y/"); ?></h2>
		<p>
				Votre navigateur est: <?php print $user_agent ?>
				Signature serveur :
				
         </p>
        <?php print $_server_sign; ?>
			
    </section>
    <section>
        <h2>La suite PHP</h2>
        <?php
            include_once("./src/table.inc.php");
        ?>
    </section>
</main>