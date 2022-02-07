<?php
    require_once('autoload.php');

    use cefet\projeto\service\Comunicador;
    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Diretor;
    use cefet\projeto\model\Endereco;
    use cefet\projeto\model\Cliente;

    $comunicador = new Comunicador();

    
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

    $comunicador->digaOla($umCliente);
    $comunicador->digaOla($kayqueDiretor);
?>