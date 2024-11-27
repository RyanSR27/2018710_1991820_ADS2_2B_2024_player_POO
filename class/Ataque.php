<?php
include_once('Item.php');

class Ataque extends Item
{
    public function __construct($name){
        $this->setName($name);
        $tamanho = 7;
        $this->setTamanho($tamanho);
        $classe='Ataque';
        $this->setClasse($classe);
        parent::__construct($name, $tamanho, $classe);
    }
}

//$ataque1 = new Ataque('Espada');

//var_dump($ataque1);