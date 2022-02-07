<?php
	namespace cefet\projeto\model;
	use cefet\projeto\model\Pessoa;
	abstract class Funcionario extends Pessoa{
		protected float $salario;//get e set

		public function __construct(Cpf $cpf, string $nome, float $salario){
			parent::__construct($cpf,$nome);
			$this->salario = $salario;
		}

		public abstract function getBonificacaoNatalina():float;

		public function getSalario():float{
			return $this->salario;
		}

		public function setSalario($salario):void{
			$this->salario = $salario;
		}

		public function getDados():string{
			return "Nome: {$this->getNome()}<br>
			Cpf: {$this->getCpf()->getNumero()}<br>
			Salário: R\${$this->getSalario()}<br>
			Bonificação Natalina: {$this->getBonificacaoNatalina()}<br>";
		}
	}
?>