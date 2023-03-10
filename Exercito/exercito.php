<?php

class Execito{
    private $nome;

    private $patente;

    private $arma;

    private $merito_militar;

    public function __construct($nome, $patente, $arma, $merito_militar) {
        $this->nome = $nome;
        $this->$patente = $patente;
        $this->$arma = $arma;
        $this->$merito_militar = $merito_militar;
    }
    
    public function getNome() {
        return $this->nome;
    }
    
    public function getPatente() {
        return $this->patente;
    }
    
    public function getIdade() {
        return $this->arma;
    }
    
    public function getMerito() {
        return $this->merito_militar;
    }
    
    public function grito_of_war() {
        echo "braço forte mão amiga";
    }
}