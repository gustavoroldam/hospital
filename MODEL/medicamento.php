<?php
    namespace MODEL;

    class Medicamento{
        private ?int $id;
        private ?string $nome;
        private ?string $validade;
        private ?int $qtde;
        private ?string $unidade;
        private ?float $preco;

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

        public function getValidade(){
            return $this->validade;
        }
        public function setValidade(string $validade){
            $this->validade = $validade;
        }

        public function getQtde(){
            return $this->qtde;
        }
        public function setQtde(int $qtde){
            $this->qtde = $qtde;
        }

        public function getUnidade(){
            return $this->unidade;
        }
        public function setUnidade(string $unidade){
            $this->unidade = $unidade;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco(float $preco){
            $this->preco = $preco;
        }
    }

?>