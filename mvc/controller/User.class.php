<?php

class User{

	private $nom;
	private $prenom;
	private $mail;
	private $password;
	private $statut;
    
    function user($prenom,$nom,$mail,$password, $statut){
    	$this->nom = $nom;
    	$this->prenom = $prenom;
    	$this->mail = $mail;
    	$this->password = $password;
    	$this->statut = $statut;
    }
    
    function get_nom(){
    	return $this->nom;
    }
    function get_prenom(){
    	return $this->prenom;
    }
    function get_password(){
    	return $this->password;
    }
    function get_mail(){
    	return $this->mail;
    }
    function get_statut(){
    	return $this->statut;
    }

    function set_nom($nom){
    	$this->nom = $nom;
    }
    function set_prenom($prenom){
    	$this->prenom = $prenom;
    }
    function set_password($password){
    	$this->password = $password;
    }
    function set_mail($mail){
    	$this->mail = $mail;
    }
    function set_statut($statut){
    	$this->statut = $statut;
    }
}


?>