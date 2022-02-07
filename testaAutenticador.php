<?php
    require_once('autoload.php');

    use cefet\projeto\service\AutenticadorDoSistema;
    use cefet\projeto\model\Gerente;
    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Diretor;
    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\Cliente;

    $autenticador = new AutenticadorDoSistema();

    $leonardoGerente = new Gerente(
        new Cpf('232.324.543-19'),
        'Leonardo',
        5000,
    );
    $dudaGerente = new Gerente(
        new Cpf('231.423.234-10'),
        'Maria Eduarda Bueno',
        7000
    );
    $kayqueDiretor = new Diretor(
        new Cpf('132.324.543-29'),
        'Kayque',
        6000
    );
    $umCliente = new Cliente(
        new Cpf('123.456.789-59'),
        'Saulo',
        new Endereco('Nova Friburgo','Centro','Rua General Osório','363 sobrado')
    );

    $autenticador->tentaLogar($leonardoGerente,123456);
    $autenticador->tentaLogar($dudaGerente,123456);
    $autenticador->tentaLogar($kayqueDiretor,654321);
    $autenticador->tentaLogar($umCliente,000000);
?>