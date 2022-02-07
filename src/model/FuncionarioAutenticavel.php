<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    abstract class FuncionarioAutenticavel extends Funcionario{
        //Gerente 20 / Caixa 8 / Tesoreiro 15
		public function getBonificacaoNatalina():float{
			return 0;
		}
        public abstract function podeAutenticar(int $senha):bool;
    }
?>