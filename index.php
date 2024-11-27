<?php

//include_once('./class/Inventario.php');
include_once('./class/Item.php');
include_once('./class/Magia.php');
include_once('./class/Defesa.php');
include_once('./class/Ataque.php');
include_once('./class/Player.php');

$player1 = new Player("Ryan");
$player2 = new Player("Guilherme");

$item1 = new Ataque("Espada");
$item2 = new Ataque("Machado");
$item3 = new Defesa("Escudo");
$item4 = new Defesa("Armadura");
$item5 = new Magia("Bola de fogo");
$item6 = new Magia("Espinho de gelo");

$player1->coletarItem($item1);
$player1->coletarItem($item3);
$player1->coletarItem($item5);
$player1->coletarItem($item2);

$player2->coletarItem($item2);
$player2->coletarItem($item4);
$player2->coletarItem($item6);

$player1->soltarItem("Escudo");
$player2->soltarItem("Espinho de Gelo");

$player1->getInventario()->capacidadeLivre();
$player2->getInventario()->capacidadeLivre();

$player1->subirNivel();
$player2->subirNivel();