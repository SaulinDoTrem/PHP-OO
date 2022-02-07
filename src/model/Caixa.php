<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    use cefet\projeto\model\Cpf;
    class Caixa extends Funcionario{
        private int $numGuiche;
        //Gerente 20 / Caixa 8 / Tesoreiro 15
		public function getBonificacaoNatalina():float{
			return $this->salario * 0.08;
		}
        public function getNumGuiche():int{
            return $this->numGuiche;
        }
        public function setNumGuiche($numGuiche):void{
            $this->numGuiche = $numGuiche;
        }
    }
    

?>