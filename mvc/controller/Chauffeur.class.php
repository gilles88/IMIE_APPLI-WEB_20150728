<?php
class Chauffeur extends User {
    public function Chauffeur($pPrenom,$pNom,$pMail,$pPassword,$pStatut){
        parent::user($pPrenom,$pNom,$pMail,$pPassword,$pStatut);
    }
}

