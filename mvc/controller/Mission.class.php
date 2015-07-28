<?php
class Mission {
    private $description;
    private $unUser;
    
    private function mission($pDespcription,$pUnUser){
        $this->description = $pDespcription;
        $this->unUser = $pUnUser;
    }
    
    private function get_description(){
        return this->description;
    }
    
    private function get_unUser(){
        return this->unUser;
    }
    
    private function set_description($pDespcription){
        this->description = $pDespcription;
    }
    
    private function set_unUser($pUnUser){
        this->unUser = $pUnUser;
    }
    
}
