<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace APP\Model;

use \PDO;
use APP\Entity\Commande;
use Tools\Connexion;
/**
 * Description of GestionCommandeModel
 *
 * @author julien.casta
 */
class GestionCommandeModel
{
    
    public function find($id){
        $unObjetPdo = Connexion::getConnexion();
        $sql = "select * from COMMANDE where id=:id";
        $ligne = $unObjetPdo->prepare($sql);
        $ligne->bindValue(':id',$id,PDO::PARAM_INT);
        $ligne->execute();
        return $ligne->fetchObject(Commande::class);
    }
    
     public function findAll() {
        $unObjetPdo = Connexion::getConnexion();
        $sql = "select * from COMMANDE";
        $ligne = $unObjetPdo->query($sql);
        return $ligne->fetchAll(PDO::FETCH_CLASS, Commande::class);
    }



}
