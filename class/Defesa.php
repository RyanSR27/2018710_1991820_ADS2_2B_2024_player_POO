<?php
include_once('Item.php');

class Defesa extends Item
{
    public function __construct($name){
        $this->setName($name);
        $tamanho = 4;
        $this->setTamanho($tamanho);
        $classe='Defesa';
        $this->setClasse($classe);
        parent::__construct($name, $tamanho, $classe);
    }
}

//$defesa1 = new Defesa('Escudo');

//var_dump($defesa1);