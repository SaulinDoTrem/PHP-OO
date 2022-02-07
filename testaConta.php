<?php

    require_once('autoload.php');



    /*require_once('src/model/Cpf.php');
    require_once('src/model/Pessoa.php');
    require_once('src/model/Cliente.php');
    require_once('src/model/Conta.php');*/
    
    

    use cefet\projeto\model\Cliente;
    use cefet\projeto\model\Conta;
    use cefet\projeto\model\Cpf;

    $contaDoSaulo = new Conta(new Cliente(new Cpf('064.580.577-76'),'Saulo Klein Nery'));
    echo "<br>";
    echo Conta::$getNumeroDeContas;
    $contaDoPedro = new Conta(new Cliente(new Cpf('064.580.577-56'),'Pedro Kepler'));
    echo "<br>";
    echo Conta::$getNumeroDeContas;
    $cpfDoRafael = new Cpf('064.580.377-76');
    $clienteRafael = new Cliente($cpfDoRafael,'Rafael');
    $contaDoRafael = new Conta($clienteRafael);
    $contaDoRafael->getTitular()->setNome('Rafael Leite Badini');
    echo "<br>";
    echo Conta::$getNumeroDeContas;

    /*$umaConta = new Conta();
    var_dump($umaConta);
    $umaConta->saldo=500;
    echo "<br>";
    var_dump($umaConta);

    $conta1->saca(2900);*/


?>