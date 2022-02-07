<?php
    namespace cefet\projeto\model;
	class Cpf{
		protected string $numero;

		public function __construct(string $numero){
            if($this->validaCpf($numero)===true)
                $this->numero = $numero;
}
		
        //Métodos acessores
        public function getNumero():string{
            return $this->numero;
        }


        //método encapsulamento
        private function validaCPF(string $numero):bool{
            if(strlen($numero)===14 && strpos($numero,'-')===11 && strpos($numero,'.')===3 && strpos($numero,'.',5)===7)
                return true;
            echo "CPF inválido!";
            exit();
        }    
	}
?>