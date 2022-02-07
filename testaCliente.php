<?php
	require_once('autoload.php');

	/*require_once('src/model/Cpf.php');
	require_once('src/model/Pessoa.php');
	require_once('src/model/Cliente.php');
	require_once('src/model/Funcionario.php');
	require_once('src/model/Endereco.php');*/
	

	use cefet\projeto\model\Cliente;
	use cefet\projeto\model\Funcionario;
	use cefet\projeto\model\Endereco;
	use cefet\projeto\model\Cpf;


	$umCliente = new Cliente(new Cpf('123.456.789-59'),'Saulo',new Endereco('Nova Friburgo','Centro','Rua General Osório','363 sobrado'));

	echo "INFORMAÇÕES DO Cliente<br>";
	echo "Nome: {$umCliente->getNome()}<br>";
	echo "Cpf: {$umCliente->getCpf()->getNumero()}<br>";
	echo "Endereço:";
	$umCliente->getEnderecoDoCliente()->mostraEnderecoCompleto();
	echo"<br><br>";

	/*echo"VAR_DUMPS:<br>Cliente:      ";
	var_dump($umCliente);
	echo"<br> Funcionario:    ";
	var_dump($umFuncionario);*/
?>