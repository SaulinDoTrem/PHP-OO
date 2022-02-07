<?php
	namespace cefet\projeto\model;

	use cefet\projeto\model\Conta;
	class ContaPoupanca extends Conta{
		//Sobrescrita de métodos
		/*public function saca(float $valor):void{
            $taxaSaque = $valor * 0.02;
            $valorASacar = $taxaSaque + $valor;
            if($valorASacar>$this->saldo){
                echo "Saldo insuficiente";
                return; //early return
            }
            $this->saldo -= $valorASacar;

        }*/
        protected function getTaxaSaque():float{
        	return 0.04;
        }
	}

?>