<?php

class Model_Eleve extends CI_Model
{

   public function InsererEleve($nom,$prenom,$tel,$addresse,$mail)
            {
        $sql = $this->db->query("INSERT INTO eleve value('','".$nom."','".$prenom."','".$tel."','".$addresse."','".$mail."','blanche')");
            }
            
    public function GetAllEleves()
            {
        $sql = $this->db->query("Select * from eleve");
        return $sql->result();
            }
    public function GetEleveById($idEleve){
        $sql= $this->db->query("SELECT * FROM eleve where idEleve='".$idEleve."'");
        return $sql->result();
    } 
    public function ModifierLeEleve($nom,$prenom,$tel,$adresse,$mail,$idEleve)
            {
        $sql = $this->db->query("UPDATE eleve SET nomEleve='".$nom."',prenomEleve='".$prenom."',telephone='".$tel."',adresse='".$adresse."',mail='".$mail."' WHERE  idEleve= '".$idEleve."'");
            }
}
//INSERT INTO type_individu values('".$data2."','".$data.
//("INSERT INTO type_individu values('".$data2."','".$data."')")