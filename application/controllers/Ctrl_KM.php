<?php

class Ctrl_KM extends CI_Controller
{
      public function index()
    {
            $this->load->view("v_Menu");       
    }

    public function pageInsertionEleve()
            {
            $this->load->view("v_InsertionEleve");     
            }
    public function affichageDesEleves()
            {
            $this->load->model("Model_Eleve");
            $data['lesEleves'] = $this->Model_Eleve->GetAllEleves();
            //var_dump($data); die();
            $this->load->view("v_AfficheEleve", $data);
            }
    public function insertionEleve()
            {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $addresse = $_POST['addresse'];
            $mail = $_POST['mail'];
            
            $this->load->model("Model_Eleve");
            $this->Model_Eleve->InsererEleve($nom,$prenom,$tel,$addresse,$mail);
   
            $this->load->view("v_Resultat");     
            } 
    public function modificationEleve()
            {
 
            
            $this->load->model("Model_Eleve");
            $data['lesEleves'] = $this->Model_Eleve->GetAllEleves();
            
            $this->load->view("v_ModificationEleve", $data);
            
            } 
    public function modificationUnEleve()
            {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $adresse = $_POST['addresse'];
            $mail = $_POST['mail'];
            $idEleve = $_POST['id'];
            
            $this->load->model("Model_Eleve");
            $this->Model_Eleve->ModifierLeEleve($nom,$prenom,$tel,$adresse,$mail,$idEleve);
            
            $this->load->view("v_Resultat2");  
            
            }
            
            
            
            
    public function pageInsertionInstructeur()
            {
            $this->load->view("v_InsertionInstructeur");     
            }
    public function affichageDesInstructeurs()
            {
            $this->load->model("Model_Instructeur");
            $data['lesInstructeurs'] = $this->Model_Instructeur->GetAllInstructeurs();

            $this->load->view("v_AfficheInstructeur", $data);
            }
    public function insertionInstructeur()
            {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $addresse = $_POST['addresse'];
            $mail = $_POST['mail'];
            
            $this->load->model("Model_Instructeur");
            $this->Model_Instructeur->InsererInstructeur($nom,$prenom,$tel,$addresse,$mail);
            
            $this->load->view("v_Resultat");     
            }
    public function modificationInstructeur()
            {
 
            
            $this->load->model("Model_Instructeur");
            $data['lesInstructeurs'] = $this->Model_Instructeur->GetAllInstructeurs();
            
            $this->load->view("v_ModificationInstructeur", $data);
            
            
            } 
    public function modificationUnInstructeur()
            {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $addresse = $_POST['addresse'];
            $mail = $_POST['mail'];
            $idInstructeur = $_POST['id'];
            
            $this->load->model("Model_Instructeur");
            $this->Model_Instructeur->ModifierLeInstructeur($nom,$prenom,$tel,$addresse,$mail,$idInstructeur);
            
            $this->load->view("v_Resultat2");  
            
            }
    public function attributionCeinture()
            {
                $this->load->model("Model_Eleve");
                $data['lesEleves'] = $this->Model_Eleve->GetAllEleves();
                $this->load->view("v_AttributionCeinture", $data); 
            }
    public function attributionCeintureByEleve()
            {
                $ceinture = $_POST['ceinture'];
                $idEleve = $_POST['idEleve'];
                $this->load->model("Model_Ceinture");
                $this->Model_Ceinture->ModifierLaCeinture($ceinture,$idEleve);
                
            }
    public function attributionCours()
            {
                $this->load->model("Model_Cours");
                $this->load->model("Model_Instructeur");
  
                $data['lesAttributions'] = $this->Model_Cours->AfficherAttributionCoursInstructeur();
                $data['lesCours'] = $this->Model_Cours->GetAllCours();
                $data['lesInstructeurs'] = $this->Model_Instructeur->GetAllInstructeurs();
                $this->load->view("v_AttributionCours", $data);
            }
    public function suppressionAttributionCours()
            {
                $cours = $_POST['cours'];
                $idInstructeur = $_POST['idInstructeur'];
                $this->load->model("Model_Cours");
                $this->Model_Cours->SupprimerCours($idInstructeur,$cours);
                $this->load->view("v_Resultat4");
                
            }
            public function InsertionAttributionCours() {
                $cours = $_POST['cours'];
                $idInstructeur = $_POST['idInstructeur'];
                $this->load->model("Model_Cours");
                $this->Model_Cours->InsererAttribuerLeCours($cours,$idInstructeur);
                $this->load->view("v_Resultat");
            }
                       
   /* public function leMenu()public function attributionCoursByInstructeur()
            {
            $login = $_POST['login'];
            $mdp = $_POST['mdp'];
            $loginMdp = $login.$mdp;
            
            //var_dump($login);
            $this->load->model("Model_Authentification");
            //$data['lesIdentifiants'] =  array();
            $data['lesIdentifiants'] = $this->Model_Authentification->GetAllLoginMdpEmploye();
            
            //var_dump($login);
            //var_dump($data); die();
           foreach ($data['lesIdentifiants'] as $identifiant) {
                if($login == $data  )
                    {
                    //var_dump($identifiant);
                    $this->load->view("v_Menu");
                    }
                else {
                    var_dump($loginMdp);
                    //var_dump($identifiant);
                    //$this->load->view("v_Menu");
                }
            //$this->load->view("v_Menu");
            }
            //$this->load->view("v_Menu");
            //var_dump($login);die();
            /*foreach ($data['lesIdentifiants'] as $identifiants) {
                if($login+$mdp == $identifiants  ){
                   $this->load->view("v_Start");
                }
            }}
        */
            
            
            
}
        
