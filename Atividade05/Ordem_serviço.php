<?php
    class ordem_serviço{
        private $_os;
        private $_solicitante;
        private $_data;
        private $_area;
        private $_situação;

        public function setOs($_o){
            $this->_os=$_o;
        }
        public function setSolicitante($_s){
            $this->_solicitante=$_s;
        }
        public function setData($_d){
            $this->_data=$_d;
        }
        public function setArea($_a){
            $this->_area=$_a;
        }
        public function setSituação($_sl){
            $this->_solicitante=$_sl;
        }

        public function getOs(){
            return $this->_os;
        }
        public function getSolicitante(){
            return $this->_solicitante;
        }
        public function getData(){
            return $this->_data;
        }
        public function getArea(){
            return $this->_area;
        }
        public function getSituaçâo(){
            return $this->_situação;
        }
    }
?>