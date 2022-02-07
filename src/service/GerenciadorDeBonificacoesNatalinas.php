<?php
    namespace cefet\projeto\service;
    use cefet\projeto\model\Funcionario;

    class GerenciadorDeBonificacoesNatalinas{
        private float $totalDeBonificacoesNatalinas;

        public function __construct(){
           $this->totalDeBonificacoesNatalinas = 0.0; 
        }

        public function acumulaBonificacoes(Funcionario $funcionario){
            //Acumula o valor
            $this->totalDeBonificacoesNatalinas += $funcionario->getBonificacaoNatalina();
        }

        public function getTotalDeBonificacoesNatalinas():float{
            return $this->totalDeBonificacoesNatalinas;
        }
    }
?>