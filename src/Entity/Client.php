<?php

namespace APP\Entity;

class Client {

    private $id;
    private $titreCli;
    private $nomCli;
    private $prenomCli;
    private $adresseRue1Cli;
    private $adresseRue2Cli;
    private $cpCli;
    private $villeCli;
    private $telCli;

    public function __construct($params = null) {
        if (!is_null($params)) {
            foreach ($params as $cle => $valeur) {
                if(strlen($valeur)>0){
                $this->$cle = $valeur;
                } else{
                     $this->$cle = null;
                }
            }
        }
    }

    public function getId() {
        return $this->id;
    }

    public function getTitreCli() {
        return $this->titreCli;
    }

    public function getNomCli() {
        return $this->nomCli;
    }

    public function getPrenomCli() {
        return $this->prenomCli;
    }

    public function getAdresseRue1Cli() {
        return $this->adresseRue1Cli;
    }

    public function getAdresseRue2Cli() {
        return $this->adresseRue2Cli;
    }

    public function getCpCli() {
        return $this->cpCli;
    }

    public function getVilleCli() {
        return $this->villeCli;
    }

    public function getTelCli() {
        return $this->telCli;
    }  
    
    function setTitreCli($titreCli) {
        $this->titreCli = $titreCli;
    }

    function setAdresseRue1Cli($adresseRue1Cli) {
        $this->adresseRue1Cli = $adresseRue1Cli;
    }

    function setAdresseRue2Cli($adresseRue2Cli) {
        $this->adresseRue2Cli = $adresseRue2Cli;
    }

    function setCpCli($cpCli) {
        $this->cpCli = $cpCli;
    }

    function setVilleCli($villeCli) {
        $this->villeCli = $villeCli;
    }

    function setTelCli($telCli) {
        $this->telCli = $telCli;
    }

     public function __toString() {
        return "Le client dont le numéro est égal à " . $this->id . " s'appelle " . $this->titreCli . " " . $this->nomCli . " " . $this->prenomCli . "<br>";
    }

    
}
