<?php
	namespace cefet\projeto\model;
	class Endereco{
		//Atributos
		private ?string $cidade = null;
		private ?string $bairro = null;
		private ?string $logradouro = null;
		private ?string $numero = null;
 
	public function __construct(string $cidade,string $bairro, string $logradouro, string $numero){
		$this->cidade = $cidade;
		$this->bairro = $bairro;
		$this->logradouro = $logradouro;
		$this->numero = $numero;
	}
	public function getCidade():string{
		return $this->cidade;
	}
	public function getBairro():string{
		return $this->bairro;
	}
	public function getLogradouro():string{
		return $this->logradouro;
	}
	public function getNumero():string{
		return $this->numero;
	}

	public function setCidade(string $cidade):void{
		$this->cidade;
	}
	public function setBairro(string $bairro):void{
		$this->bairro;
	}
	public function setLogradouro(string $logradouro):void{
		$this->logradouro;
	}
	public function setNumero(string $numero):void{
		$this->numero;
	} 
	public function mostraEnderecoCompleto():void{
		echo "Logradouro: {$this->logradouro}, {$this->numero} - {$this->getBairro()} - {$this->cidade}";
	}
	}
?>