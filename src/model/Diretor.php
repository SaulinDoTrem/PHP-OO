<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    use cefet\projeto\model\Autenticavel;
    use cefet\projeto\model\Comunicavel;
    class Diretor extends Funcionario implements Autenticavel, Comunicavel{
        //Gerente 20 / Caixa 8 / Tesoreiro 15 
		public function getBonificacaoNatalina():float{
			return $this->salario * 0.3;
		}
        public function podeAutenticar(int $senha):bool{
            return ($senha ===654321);
        }
        public function olaMundo():void{
            echo "-Diretor {$this->getNome()}: Coéééé rapaziada!!!";
        }
    }
?>