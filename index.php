<!DOCTYPE html>
<!--ISSA Salim - 22 Février 2024 - Projet de développement web-->
<html>
    <head>
        <title>accueil</title>
        <link rel="stylesheet" href="_css/style.css" />
    </head>
    <body>
        <h1>Années académiques</h1>
        <h3><a href="index.php">&nbsp;&nbsp;&nbsp;Accueil</a>
        <a href="_a-propos.php">&nbsp;&nbsp;&nbsp;&Agrave; propos</a>
        <a href="_contact.php">&nbsp;&nbsp;&nbsp;Contact</a></h3>
        <?php
        include_once('_bib/lib.php');
        mkmap('.');
        if (isset($_POST['lancer'])) {
            echo "<h4><br/><br/>R&eacute;sultat de la recherche: </h4>";
            search_files('.',$_POST['texte']);
        }
        ?>
    </body>
</html>