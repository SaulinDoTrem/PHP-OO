<?php
    namespace cefet\projeto\service;
    use cefet\projeto\model\Comunicavel;

    class Comunicador{
        public function digaOla(Comunicavel $com){
            $com->olaMundo();
        }
    }
?>