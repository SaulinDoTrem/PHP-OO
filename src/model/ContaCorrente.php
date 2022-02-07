<?php
	namespace cefet\projeto\model;

	use cefet\projeto\model\Conta;
	class ContaCorrente extends Conta{
		public function transferePara(float $valor, Conta &$contaDestino):void{
            if($valor > $this->saldo){
                    echo "Saldo insuficiente";
                    return;
            }
                $this->saca($valor);
                $contaDestino->deposita($valor);
            
        }
        protected function getTaxaSaque():float{
        	return 0.1;
        }
	}

?>