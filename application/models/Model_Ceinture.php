<?php

class Model_Ceinture extends CI_Model
{

    public function ModifierLaCeinture($ceinture,$idEleve)
            {
        $sql = $this->db->query("UPDATE eleve SET ceinture='".$ceinture."' WHERE  idEleve= '".$idEleve."'");
            }
}
//INSERT INTO type_individu values('".$data2."','".$data.
//("INSERT INTO type_individu values('".$data2."','".$data."')")