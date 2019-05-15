<?php

class Nodo
{
    private $_value;
    private $_next;

    public function __construct( $value, $next ){
        $this->_value = $value;
        $this->_next = $next;
    }

    public function getValue(){
        return $this->_value;
    }
    public function setValue($value){
        $this->_value = $value;
    }
    public function setNext($next){
        $this->_next = $next;
    }
    public function getNext(){
        return $this->_next;
    }
}
