<?php
    class serviços{
        private $_inicio;
        private $_termino;
        private $_atividade;
        private $_tecnico;
        private $_total;
        
        public function setInicio($_i){
            $this->_inicio=$_i;
        }
        public function getInicio(){
            return $this->_inicio;
        }
        public function setTermino($_t){
            $this->_termino=$_t;
        }
        public function getTermino(){
            return $this->_termino;
        }
        public function setAtividade($_a){
            $this->_atividade=$_a;
        }
        public function getAtividade(){
            return $this->_atividade;
        }
        public function setTecnico($_tc){
            $this->_tecnico=$_tc;
        }
        public function getTecnico(){
            return $this->_tecnico;
        }
        public function setTotal($_tt){
            $this->_total=$_tt;
        }
        public function getTotal(){
            return $this->_total;
        }
    }
?>