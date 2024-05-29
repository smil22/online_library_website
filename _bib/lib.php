<!DOCTYPE html>
<!--ISSA Salim - 22 Février 2024 - Projet de développement web-->
<html>
    <body>
        <?php
        function mkmap($dir){
            echo '<br/><br/><form id="recherche" method="post"> 
            <input type="text" name="texte" class="recherche" placeholder="Entrez le nom du fichier" required><br/>
            <input type="submit" name="lancer" class="recherche" value="Chercher">
            </form><br/><br/>';
            echo "<br/><br/><br/><br/><ul>";   
            $folder = opendir ($dir);
            $files = array();
            while ($file = readdir ($folder)) {
                if ($file != "." && $file != ".." && $file != "index.php" && $file[0]!="_") {        
                    $pathfile = $dir.'/'.$file;
                    $files[$pathfile] = $file;            
                    /*if(filetype($pathfile) == 'dir'){            
                        mkmap($pathfile);          
                    } */          
                }       
            }
            natsort($files);
            foreach($files as $pathfile=>$file) {
                echo "<a href=$pathfile><li class='dossier'>$file</li></a>";
            }
            closedir ($folder);    
            echo "</ul>";
        }

        function search_files($dir,$sample) {
            $folder = opendir ($dir);
            while ($file = readdir ($folder)) {
                if ($file != "." && $file != ".." && $file != "index.php" && $file[0]!="_") {   
                    $pathfile = $dir.'/'.$file;
                    if (str_contains(strtolower($file),strtolower($sample))) {
                        if(filetype($pathfile) == 'dir'){            
                            echo "<a href=$pathfile><span class='dossier'>$file</span></a>&nbsp;&nbsp;&nbsp;($pathfile)<br/><br/>";
                        }
                        else {
                            echo "<a href=$pathfile><span class='fichier'>$file</span></a>&nbsp;&nbsp;&nbsp;($pathfile)<br/><br/>"; 
                        }
                    }
                    else {
                        if(filetype($pathfile) == 'dir'){            
                            search_files($pathfile,$sample);
                        }
                    }
                }
                /*else {
                    echo '<p>Aucun fichier ou dossier portant ce nom.</p>';
                } */   
            }
            closedir ($folder);
        }

        function downloadablefiles($dir){
             echo '<br/><br/><form id="recherche" method="post"> 
            <input type="text" name="texte" class="recherche" placeholder="Entrez le nom du fichier" required><br/>
            <input type="submit" name="lancer" class="recherche" value="Chercher">
            </form><br/><br/>';
            echo "<br/><br/><br/><br/><ul>";
            $folder = opendir($dir);
            $files = array();
            while($file=readdir($folder)) {
                if ($file != "." && $file != ".." && $file != "index.php") {
                    $files[] = $file;
                }
            }
            natsort($files);
            foreach($files as $file) {
                echo "<a href='$file'><li class='fichier'>$file</li></a>";
            }
            closedir($folder);
            echo "</ul>";
        }
        function send_mail($destinataire,$objet,$message,$expediteur) {
            $retour = mail($destinataire,$objet,$message,$expediteur);
            if($retour) {
                echo '<p>Message envoyé ! Merci beaucoup !</p>';
            }
            else {
                echo '<p>Un problème est survenu. Nous nous en occupons.</p>';
            }
        }
        ?>
    </body>
</html>