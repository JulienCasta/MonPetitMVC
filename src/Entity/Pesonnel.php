<?php

namespace APP\Entity;

class Personnel {

    private $id;
    private $nom;
    private $prenom;
    private $cp;
    private $ville;
    private $sexe;
    private $idProjet;
    private $poste;
    private $salaire;
    private $superieur;

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

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getCp() {
        return $this->cp;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function getIdProjet() {
        return $this->idProjet;
    }
    public function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

        public function getPoste() {
        return $this->poste;
    }

    public function getSalaire() {
        return $this->salaire;
    }

    public function getSuperieur() {
        return $this->superieur;
    }


}
