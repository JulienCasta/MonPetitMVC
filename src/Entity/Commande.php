<?php

namespace APP\Entity;

/**
 * Description of cours
 *
 * @author Benoît
 */
class Commande {

    private $id;
    private $dateCde;
    private $noFacture;
    private $idClient;
    

    public function __construct($params = null) {
        if (!is_null($params)) {
            foreach ($params as $cle => $valeur) {
                if (strlen($valeur) > 0) {
                    $this->$cle = $valeur;
                } else {
                    $this->$cle = null;
                }
            }
        }
    }

    public function getId() {
        return $this->id;
    }
    function getDateCde() {
        return $this->dateCde;
    }

    function getNoFacture() {
        return $this->noFacture;
    }
    
    function getIdClient() {
        return $this->idClient;
    }




}
