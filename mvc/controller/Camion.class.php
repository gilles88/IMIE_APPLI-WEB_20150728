<?php
class Camion {
    private $modele;
    
    public function get_modele(){
        return $this->modele;
    }
    
    public function set_modele($pModele){
        $this->modele = $pModele;
    }
}
