<?php
	namespace cefet\projeto\model;
	use cefet\projeto\model\Pessoa;
	use cefet\projeto\model\Endereco;
	use cefet\projeto\model\Comunicavel;
	use cefet\projeto\model\Autenticavel;

	class Cliente extends Pessoa implements Autenticavel, Comunicavel{
		
		private Endereco $enderecoDoCliente;
		public function __construct(Cpf $cpf,string $nome, Endereco $enderecoDoCliente){
            parent::__construct($cpf,$nome);
            $this->enderecoDoCliente = $enderecoDoCliente;
        }

		public function olaMundo():void{
			echo "-Cliente {$this->getNome()}:Olá Mundo<br>";
		}

        public function getEnderecoDoCliente():Endereco{
            return $this->enderecoDoCliente;
        }

		public function podeAutenticar(int $senha):bool{
            return ($senha ===000000);
        }
	}
?>