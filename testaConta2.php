<?php
	require_once('autoload.php');

    use cefet\projeto\model\Cliente;
    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\ContaPoupanca;
    use cefet\projeto\model\ContaCorrente;
    use cefet\projeto\model\ContaUniversitaria;

    $umaContaPoupanca = new ContaPoupanca(
    	new Cliente(
    		new Cpf('164.143.567-10'),
    		'Saulo',
    		new Endereco('Nova Friburgo','Centro','Rua General Osório','363 sobrado')
    	)
    );

    $umaContaCorrente = new ContaCorrente(
    	new Cliente(
    		new Cpf('164.132.547-10'),
    		'Maria Isabel',
    		new Endereco('Nova Friburgo','Centro','Rua General Osório','267')
    	)
    );
     $umaContaUniversitaria = new ContaUniversitaria(
    	new Cliente(
    		new Cpf('164.189.567-70'),
    		'Fulano',
    		new Endereco('Nova Friburgo','Centro','Rua General Osório','950')
    	)
    );

    $umaContaPoupanca->deposita(1000); 
    $umaContaCorrente->deposita(1000);
    $umaContaUniversitaria->deposita(1000);
    //Trasnferencia
    //$umaContaCorrente->transferePara(500,$umaContaPoupanca);
    echo "<br>antes do saque:<br>";
    $umaContaPoupanca->mostraDados();
    $umaContaCorrente->mostraDados();
    $umaContaUniversitaria->mostraDados();
    $umaContaUniversitaria->saca(500);
    $umaContaPoupanca->saca(500);
    $umaContaCorrente->saca(500);
    echo "<br>depois do saque:<br>";
    $umaContaPoupanca->mostraDados();
    $umaContaUniversitaria->mostraDados();
    $umaContaCorrente->mostraDados();
?>