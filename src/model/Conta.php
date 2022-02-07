<?php
    namespace cefet\projeto\model;
    use cefet\projeto\model\Cliente;
    abstract class Conta{
        //Atributos (características)
        private Cliente $titular;
        protected float $saldo;
        public static int $numeroDeContas=0;

        //método construtor
        public function __construct(Cliente $titular){
            $this->titular = $titular;
            $this->saldo = 0;
            self::$numeroDeContas++;
            echo"<br>Estou criando uma nova conta...<br>";
        }
        //Método destrutor
        public function __destruct(){
            echo "<br>um objeto foi removido da memória.<br>";
            self::$numeroDeContas--;
        }

        //Métodos acessores
        public function getSaldo():float{
            return $this->saldo;
        }

        public static function getNumeroDeContas():int{
            return Conta::$numeroDeContas;
        }
        //titular
        public function getTitular():Cliente{
            return $this->titular; //endereço de memória
        }

        //Comportamento
        public function saca(float $valor):void{
            $taxaSaque = $valor * $this->getTaxaSaque();
            $valorASacar = $taxaSaque + $valor;
            if($valorASacar>$this->saldo){
                echo "Saldo insuficiente";
                return; //early return
            }
            $this->saldo -= $valorASacar;

        }
        protected abstract function getTaxaSaque():float;
        
        public function deposita(float $valor):void{
            $this->saldo+= $valor;
        }

        public function mostraDados():void{
            echo "<br> A conta de {$this->titular->getNome()} tem o saldo de R$ {$this->saldo}<br>";
            $this->getTitular()->getEnderecoDoCliente()->mostraEnderecoCompleto();
            echo"<br>";
        }
    }

?>