<?php
    foreach ($tab_v as $v){
        $immat = htmlspecialchars($v->getImmatriculation());
        $immatURL = rawurlencode($v->getImmatriculation());
        echo "<a href='index.php?action=read&immat=$immatURL'> Immatriculation: $immat</a> <a style='color: #ff0000' href='index.php?action=delete&immat=$immatURL'>SUPPRIMER</a><br>";
    }
?>