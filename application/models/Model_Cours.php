<?php

class Model_Cours extends CI_Model
{

    
    public function GetAllCours()
            {
        $sql = $this->db->query("Select * from cours");
        return $sql->result();
            }
    public function SupprimerCours($idInstructeur,$cours)
            {
                $sql = $this->db->query("DELETE FROM repartition WHERE idInstructeur='".$idInstructeur."' AND idCours='".$cours."'");
                
            }
    public function ModifierAttribuerLeCours($cours,$idInstructeur)
            {
        $sql = $this->db->query("UPDATE repartition SET idInstructeur='".$idInstructeur."', idCours='".$cours."' WHERE  idInstructeur= '".$idInstructeur."' ");
            }
    public function InsererAttribuerLeCours($cours,$idInstructeur)
            {
        $sql = $this->db->query("INSERT INTO repartition VALUES ('".$idInstructeur."', '".$cours."')");
            }
    public function AfficherAttributionCoursInstructeur()
            {
        $sql = $this->db->query("Select libelleCours , jourCours , prenomInstructeur, nomInstructeur from instructeur , repartition , cours WHERE instructeur.idInstructeur = repartition.idInstructeur AND cours.idCours = repartition.idCours");
        return $sql->result();
            }
}
//INSERT INTO type_individu values('".$data2."','".$data.
//("INSERT INTO type_individu values('".$data2."','".$data."')")