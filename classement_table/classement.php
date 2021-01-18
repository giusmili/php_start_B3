<!--head-->
<?php
    include_once("./src/header.inc.php");
?>
<body>
    <header>
        <h1>Spécial arrow <i aria-hidden="true" class="arrow-left"></i></h1>
    </header>
    <main>
        <div class="section" role="table" aria-label="table-info">
            <table>
                <caption>Le top 10 des langages</caption>
                <thead>
                    <tr>
                        <th role="columnheader">Classement</th>
                        <th>Langage</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <!--affichage des données-->
                <tbody>
                   
                   <?php
                    include_once("./src/table_assoc.inc.php");
                   ?>
              
                </tbody>
                <!--partie footer-->
                <tfoot>
                        <tr>
                            <th>Classement</th>
                            <th>Langage</th>
                            <th>Type</th>
                        </tr>
                </tfoot>
            </table>

        </div>
       <?php
            include_once("./src/footer.inc.php");
       ?>
    </main>
  
</body>
</html>