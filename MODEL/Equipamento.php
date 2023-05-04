<?php
    namespace MODEL;

    class Equipamento{
        private ?int $id;
        private ?string $nome;
        private ?string $marca;
        private ?float $valor;
        private ?float $valorhora;
        private ?string $status;

        public function __construct(){}

        public function getId(){
            return $this->id;
        }

        public function setId(int $id){
            $this->id = $id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function getMarca(){
            return $this->marca;
        }

        public function setMarca(string $marca){
            $this->marca = $marca;
        }

        public function getValor(){
            return number_format($this->valor, 2, ",", ".");
        }

        public function setValor(float $valor){
            $this->valor = $valor;
        }

        public function getValorhora(){
            return number_format($this->valorhora, 2, ",", ".");
        }

        public function setValorhora(float $valorhora){
            $this->valorhora = $valorhora;
        }

        public function getStatus(){
            return $this->status;
        }

        public function setStatus(string $status){
            $this->status = $status;
        }
    }

?>