<?php
class Mission {
    private $description;
    private $unUser;
    
    public function mission($pDespcription,$pUnUser){
        $this->description = $pDespcription;
        $this->unUser = $pUnUser;
    }
    
    public function get_description(){
        return this->description;
    }
    
    public function get_unUser(){
        return this->unUser;
    }
    
    public function set_description($pDespcription){
        this->description = $pDespcription;
    }
    
    public function set_unUser($pUnUser){
        this->unUser = $pUnUser;
    }
    
}
