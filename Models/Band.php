<?php

	#Data model d'un groupe
	class Band {

		#### Constructor ####
		public function __construct()
		{

		}

		# Id 
		public $Id;

		# Réputation
		public $Fame;

		# Joueurs du groupe (tableau de Player)
		public $Players;

		# Morceaux du groupe (tableau de Track)
		public $Tracks;

		# Production du groupe (EP, LP, Démo) (tableau de Release)
		public $Releases;

		# Calendrier du groupe
		public $Schedule;
	}

?>