<?php
    class equipamentos{
        private $_local;
        private $_justificativa;
        private $_problema;
        private $_observação;

        public function setLocal($_l){
            $this->_local=$_l;
        }
        public function getLocal(){
            return $this->_local;
        }
        public function setJustificativa($_j){
            $this->_justificativa=$_j;
        }
        public function getJustificativa(){
            return $this->_justificativa;
        }
        public function setProblema($_p){
            $this->_problema=$_p;
        }
        public function getproblema(){
            return $this->_problema;
        }
        public function setNome($_n){
            $this->_nome=$_n;
        }
        public function getObservação(){
            return $this->_observação;
        }
    }
?>