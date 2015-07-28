<?php 
Class User_manager{

	private $users = array();

	function user_manager($users){
		$this->users = $users;
	}
	
	function get_nb_user_online(){
		// return array
		$online_users = array();
		foreach ($this->users as $row) {
			if ($row->get_statut) $online_users[] = $row;			
		}
		return $online_users;
	}

	function search_user($nom="", $prenom=""){
		//retourne tableau de resultat
		$result = array();
		foreach ($this->users as $row) {
			if ($row->get_nom() == $nom ||
					$row->get_prenom() == $prenom ||
					($row->get_nom() == $nom && $row->get_prenom() == $prenom)) {
				$result[] = $row;
			}
		}
		return $result;
	}


	function auth_user($email="", $pass=""){		
		foreach ($this->users as $row) {			
			if ($row->get_mail() == $email && $row->get_password() == $pass) {
				$row->set_statut(true); 
				return $row;

			}
		}
		return false;
	}

	function delete_user($user){
		/*
		params : mail
		return : boolean
		*/

		foreach ($this->users as $key => $row) {
			if($row->get_mail() == $user->get_mail()){
				unset($this->users[$key]);
				return true;
			}
		}
		return false;
	}

	function add_user($user){
		// return tableau users
		$this->users[] = $user;
		return $this->users;
	}



}

 ?>