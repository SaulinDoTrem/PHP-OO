<?php
    namespace cefet\projeto\service;
    use cefet\projeto\model\Autenticavel;
    
    class AutenticadorDoSistema{
        public function tentaLogar(Autenticavel $Autenticavel, int $senha){
            if($Autenticavel->podeAutenticar($senha))
                echo "<hr>Parabéns! Acesso liberado ao sistema!<br>";
            else
                echo "<hr>Desculpe! Acesso negado ao sitema! Senha inválida!<br>";
        }
    }

?>