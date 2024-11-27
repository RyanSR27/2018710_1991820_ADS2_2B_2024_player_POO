<?php
include_once('Item.php');

class Magia extends Item
{
    public function __construct($name){
        $this->setName($name);
        $tamanho = 2;
        $this->setTamanho($tamanho);
        $classe='Magia';
        $this->setClasse($classe);
        parent::__construct($name, $tamanho, $classe);
    }
}

//$magia1 = new Magia('Bola de Fogo');

//var_dump($magia1);