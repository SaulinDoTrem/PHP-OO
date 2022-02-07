<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    class Secretaria extends Funcionario{
        //Gerente 20 / Caixa 8 / Tesoreiro 15
		public function getBonificacaoNatalina():float{
			return $this->salario * 0.11;
		}
    }
?>