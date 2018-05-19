<?php

class Model_Instructeur extends CI_Model
{

   public function InsererInstructeur($nom,$prenom,$tel,$addresse,$mail)
            {
        $sql = $this->db->query("INSERT INTO instructeur value('','".$nom."','".$prenom."','".$tel."','".$addresse."','".$mail."')");
            }
   public function GetAllInstructeurs()
            {
        $sql = $this->db->query("Select * from instructeur");
        return $sql->result();
            }
   public function ModifierLeInstructeur($nom,$prenom,$tel,$addresse,$mail,$idInstructeur)
            {
        $sql = $this->db->query("UPDATE instructeur SET nomInstructeur='".$nom."',prenomInstructeur='".$prenom."',telephone='".$tel."',addresse='".$addresse."',mail='".$mail."' WHERE  idInstructeur= '".$idInstructeur."'");
            }
}
