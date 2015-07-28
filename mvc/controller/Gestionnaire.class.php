<?php
class Gestionnaire extends User {
    private $lesChauffeurs;
    
    private function gestionnaire($pPrenom,$pNom,$pMail,$pPassword,$pStatut,){
        parent::user($pPrenom,$pNom,$pMail,$pPassword,$pStatut);
        $this->lesChauffeurs = array();
    }
    
    private function get_lesChauffeurs(){
        return $this->lesChauffeurs;
    }
    private function set_lesChauffeurs($pLesChauffeurs){
        $this->lesChauffeurs = $pLesChauffeurs;
    }
    
    private function addChauffeur($pChauffeur){
        array_push($this->lesChauffeurs,$pChauffeur);
    }
    
    private function delChauffeur($pChauffeur){
        foreach($this->lesChauffeurs as $key => $leChauffeur){
            if($leChauffeur->get_email() == $pChauffeur->get_email()){
                unset($this->lesChauffeurs[$key]);
                return true;
            }
        }
        return false;
    }
}
