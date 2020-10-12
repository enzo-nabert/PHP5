<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
            foreach ($tab_v as $v){
                $immat = htmlspecialchars($v->getImmatriculation());
                echo "<a href='routeur.php?action=read&immat={$v->getImmatriculation()}'> Immatriculation: $immat</a> <a style='color: #ff0000' href='index.php?action=delete&immat={$v->getImmatriculation()}'>SUPPRIMER</a><br>";
            }
        ?>
    </body>
</html>