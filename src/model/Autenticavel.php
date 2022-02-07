<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Funcionario;
    interface Autenticavel{

        public function podeAutenticar(int $senha):bool;
    }
?>