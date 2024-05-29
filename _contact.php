<!DOCTYPE html>
<!--ISSA Salim - 2 Avril 2024 - Projet de développement web-->
<html>
    <head>
        <title>contact</title>
        <link rel="stylesheet" href="_css/style.css" />
    </head>
    <body>
        <h1>Contact</h1>
        <h3><a href="index.php">&nbsp;&nbsp;&nbsp;Accueil</a>
        <a href="_a-propos.php">&nbsp;&nbsp;&nbsp;&Agrave; propos</a>
        <a href="_contact.php">&nbsp;&nbsp;&nbsp;Contact</a></h3>
        <p>Faites nous part de tout probl&egrave;me que vous rencontrez
            pendant votre navigation.
        </p> 
        <?php
        /*include_once('_bib/lib.php');
        if (isset($_POST['envoi'])) {
            send_mail('salimissa202@gmail.com',$_POST['objet'],$_POST['message'],'From: '.$_POST['email']);
        }*/
        ?>
        <!--<form id="contact" method="post">
            <input type="email" class="entrees" name="email" placeholder="Votre adresse mail" required/><br/>
            <input type="text" class="entrees" name="objet" placeholder="Objet" required/><br/>
            <textarea class="entrees" name="message" placeholder="Message" required></textarea><br/>
            <input type="submit" name="envoi" value="Envoyer"/>
        </form>-->
        <img src="_image/mail_icon.webp" alt="icone_mail" class="icone"/>
        <p>salim.issa@etu.eilco.univ-littoral.fr</p>
    </body>
</html>