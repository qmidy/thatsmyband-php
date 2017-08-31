<?php
	
	#Data model d'un release
	class Release {

		### Constructor ###
		public function __construct()
		{

		}

		# Id
		public $Id;

		# Nom
		public $Name;

		# Qualité d'enregistrement
		public $RecordingQuality;

		# Morceaux de la release
		public $Tracks;
	}

?>