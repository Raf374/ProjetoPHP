<?php
    class ordem_serviço{
        private $_nome;
        private $_telefone;
        private $_endereço;
        private $_bairro;
        private $_cidade;
        private $_uf;
        private $_cep;
        
        public function setNome($_n){
            $this->_nome=$_n;
        }
        public function getNome(){
            return $this->_nome;
        }
        public function setTelefone($_t){
            $this->_telefone=$_t;
        }
        public function getTefone(){
            return $this->_telefone;
        }
        public function setEndereço($_e){
            $this->_endereço=$_e;
        }
        public function getEndereço(){
            return $this->_endereço;
        }
        public function setBairro($_b){
            $this->_bairro=$_b;
        }
        public function getBairro(){
            return $this->_bairro;
        }
        public function setCidade($_c){
            $this->_cidade=$_c;
        }
        public function getCidade(){
            return $this->_cidade;
        }
        public function setUf($_u){
            $this->_uf=$_u;
        }
        public function getUf(){
            return $this->_uf;
        }
        public function setCep($_c){
            $this->_cep=$_c;
        }
        public function getCep(){
            return $this->_cep;
        }
    }
?>
?>