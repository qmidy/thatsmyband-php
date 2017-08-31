<?php

	#Data model d'un player
	class Player {

		### Constructor ###
		public function __construct($Name, $Experience, $Talent, $GuitarSkill, $VocalsSkill, $BassSkill, $DrumsSkill, $CoordinationSkill, $Equipment)
		{
			$this->Name = $Name;
			$this->Experience = $Experience;
			$this->Talent = $Talent;
			$this->GuitarSkill = $GuitarSkill;
			$this->VocalsSkill = $VocalsSkill;
			$this->BassSkill = $BassSkill;
			$this->DrumsSkill = $DrumsSkill;
			$this->CoordinationSkill = $CoordinationSkill;
			$this->Equipment = $Equipment;
		}

		# Id
		public $Id;

		# Nom
		public $Name;

		# Experience 
		public $Experience;

		# Talent 
		public $Talent;

		# Niveau Guitare
		public $GuitarSkill;

		# Niveau Chant
		public $VocalsSkill;

		# Niveau Basse
		public $BassSkill;

		# Niveau Batterie
		public $DrumsSkill;

		# Niveau Coordination (Maitrise de plusieurs instruments en même temps)
		public $CoordinationSkill;

		# Matériel 
		public $Equipment;
	}
	
?>