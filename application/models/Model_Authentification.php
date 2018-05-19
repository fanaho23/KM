<?php

class Model_Authentification extends CI_Model
{
    public function GetAllLoginMdpEmploye(){
        $sql= $this->db->query("SELECT login, mdp FROM employe");
        return $sql->result();
    }
    public function GetAllLoginEmploye(){
        $sql= $this->db->query("SELECT login FROM employe");
        return $sql->result();
    }
    public function GetAllMdpEmploye(){
        $sql= $this->db->query("SELECT mdp FROM employe");
        return $sql->result();
    }

}
