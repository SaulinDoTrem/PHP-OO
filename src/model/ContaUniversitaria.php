<?php
	namespace cefet\projeto\model;
	use cefet\projeto\model\Conta; 
	class ContaUniversitaria extends Conta{
		


		protected function getTaxaSaque():float{
        	return 0.02;
        }
	}

?>