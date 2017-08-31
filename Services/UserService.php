<?php

	include_once '../DBA/DBAService.php';

	#Service des User
	class UserService {

		private $dbaService;

		#### Constructeur ####
		public function __construct()
		{
			$this->dbaService = new DBAService();
		}

		# renvoie le user par son Id
		public function GetUserByUserId($userId)
		{			
			return $this->dbaService->GetUserByUserId($userId);
		}

	}

	# Service Ajax
	if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    $payload = $_POST['payload'];
    switch($action) {
        case 'userInfo' : 
        	$userService = new UserService();
        	echo json_encode($userService->GetUserByUserId($payload));
        	break;
    	}
	}


?>