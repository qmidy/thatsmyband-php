<?php

	include_once '../Models/Band.php';
	include_once '../Models/Player.php';
	include_once '../Models/Release.php';
	include_once '../Models/Track.php';
	include_once '../Models/User.php';

	#Service d'accès à la base de donnée
	class DBAService {

		#### Constructeur ####
		public function __construct()
		{
			
		}

		# renvoie le user par son Id
		public function GetUserByUserId($userId)
		{			
			# Mocker des données
			# Players
			$players = Array (
					new Player("Zak", "12", "25", "58", "5", "0", "0", "2", "Gibson SG"),
					new Player("Kyll", "12", "25", "58", "5", "0", "0", "2", "Gibson Lespaul")
					);

			# Releases 

			# Tracks

			# Band
			$band = new Band();
			$band->Players = $players;

			# User			
			$user = new User();
			$user->CashFlow = 758;
			$user->Band = $band;

			return $user;
		}
	}

?>