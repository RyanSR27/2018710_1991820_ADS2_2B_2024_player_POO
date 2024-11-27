<?php

include_once('Inventario.php');
include_once('Item.php');
include_once('Ataque.php');
include_once('Defesa.php');
include_once('Magia.php');

class Player
{
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;
    
    public function __construct(string $nickname){
        $this->setNickname($nickname);
        $nivel=1;
        $this->setNivel($nivel);
        $this->inventario = new Inventario($this);
    }

    public function getNickname(): string{
        return $this->nickname;   
    }

    public function setNickname(string $nickname): void{
        if (empty($nickname)) {
            echo "Digite o nome do Player";
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getInventario(): Inventario {
        return $this->inventario;
    }

    public function getNivel(): int{
        return $this->nivel;
    }

    public function setNivel(int $nivel): void{
        $this->nivel = $nivel;
    }

    public function coletarItem(Item $item) {
        $this->inventario->adicionar($item);
    }

    public function soltarItem(string $nome){
        $this->inventario->remover($nome);
        echo "<br>O player {$this->nickname} soltou o item {$nome}<br>";
    }

    public function subirNivel(){
        $this->setNivel(($this->getNivel() + 1));
        $this->inventario->setCapacidadeMaxima(($this->nivel * 3) + $this->inventario->getCapacidadeMaxima());
        echo "<br> O player {$this->nickname} upou para o nível: {$this->getNivel()} e o seu inventário aumentou para {$this->inventario->getCapacidadeMaxima()} <br>";
    }
}

//$player1 = new Player("Ryan");
//$player1->subirNivel();