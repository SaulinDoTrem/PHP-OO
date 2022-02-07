<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    use cefet\projeto\model\Autenticavel;
    class Gerente extends Funcionario implements Autenticavel{
        //Gerente 20 / Caixa 8 / Tesoreiro 15
		public function getBonificacaoNatalina():float{
			return $this->salario * 0.2;
		}
        public function podeAutenticar(int $senha):bool{
            return ($senha ===123456);
        }
    }
?>