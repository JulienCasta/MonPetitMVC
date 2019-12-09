<?php

include_once PATH_VIEW . "header.html";
echo "<p>Nombre de commandes trouvées : " . count($commandes) . "</p>";

foreach ($commandes as $commande){
    echo $commande->getId(). " - " . $commande->getDateCde() .  " - ";
    If($commande->getNoFacture()==null){
        echo "Non Facturée" . " - " . $commande->getIdClient() . "<br>";
    }else{
        echo $commande->getNoFacture() . " - " . $commande->getIdClient() . "<br>";
    }
        
}
include_once  PATH_VIEW . "footer.html";
