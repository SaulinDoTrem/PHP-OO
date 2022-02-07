<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Cpf;
	class Pessoa{
		protected Cpf $cpf;
		private string $nome;

		public function __construct(Cpf $cpf,string $nome){
            $this->cpf = $cpf;
            $this->setNome($nome);
        }

		public function getNome():string{
            return $this->nome;
        }
        public function setNome(string $nome){
        	$this->nome = $nome;
        }
        public function getCpf():Cpf{
            return $this->cpf;
        }
	}
	
?>