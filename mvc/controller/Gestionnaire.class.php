<?php
class Gestionnaire extends User {
    private $lesChauffeurs;
    
    public function gestionnaire($pPrenom,$pNom,$pMail,$pPassword,$pStatut,){
        parent::user($pPrenom,$pNom,$pMail,$pPassword,$pStatut);
        $this->lesChauffeurs = array();
    }
    
    public function get_lesChauffeurs(){
        return $this->lesChauffeurs;
    }
    public function set_lesChauffeurs($pLesChauffeurs){
        $this->lesChauffeurs = $pLesChauffeurs;
    }
    
    public function addChauffeur($pChauffeur){
        array_push($this->lesChauffeurs,$pChauffeur);
    }
    
    public function delChauffeur($pChauffeur){
        foreach($this->lesChauffeurs as $key => $leChauffeur){
            if($leChauffeur->get_email() == $pChauffeur->get_email()){
                unset($this->lesChauffeurs[$key]);
                return true;
            }
        }
        return false;
    }
}
