<?php
    require_once('autoload.php');
    use cefet\projeto\model\Cpf;
    use cefet\projeto\model\Caixa;
    use cefet\projeto\model\Gerente;
    use cefet\projeto\model\Tesoureiro;
    use cefet\projeto\model\Secretaria;
    use cefet\projeto\model\Diretor;
    use cefet\projeto\service\GerenciadorDeBonificacoesNatalinas;

    $gerenciador = new GerenciadorDeBonificacoesNatalinas();

    $gabrielCaixa = new Caixa(
		new Cpf('123.421.565-90'),
		'Gabriel',
		2000
	);
    $leonardoGerente = new Gerente(
        new Cpf('232.324.543-19'),
        'Leonardo',
        5000,
    );
    $camilleTesoureiro = new Tesoureiro(
        new Cpf('232.324.543-20'),
        'Camille',
        3000
    );
    $biaSecretaria = new Secretaria(
        new Cpf('132.324.543-20'),
        'Beatriz',
        2500
    );
    $kayqueDiretor = new Diretor(
        new Cpf('132.324.543-29'),
        'Kayque',
        6000
    );


    $gerenciador->acumulaBonificacoes($gabrielCaixa);
    $gerenciador->acumulaBonificacoes($leonardoGerente);
    $gerenciador->acumulaBonificacoes($camilleTesoureiro);
    $gerenciador->acumulaBonificacoes($biaSecretaria);
    $gerenciador->acumulaBonificacoes($kayqueDiretor);


	echo "{$gabrielCaixa->getDados()}<br>";
    echo "{$leonardoGerente->getDados()}<br>";
    echo "{$camilleTesoureiro->getDados()}<br>";
    echo "{$biaSecretaria->getDados()}<br>";
    echo "{$kayqueDiretor->getDados()}<br>";

    echo "Total de Bonificações Natalinas: R\${$gerenciador->getTotalDeBonificacoesNatalinas()}";



?>