<?php 

include_once('Item.php');
include_once('Player.php');

class Inventario {

    private int $capacidadeMaxima;
    private array $itens;
    private int $tamanhoOcupado;

    public function __construct()
    {
        $this->itens = array();
        $this->capacidadeMaxima = 20;
        //$this->setCapacidadeMaxima($capacidadeMaxima);
        $tamanhoOcupado = 0;
        $this->setTamanhoOcupado($tamanhoOcupado);
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima(int $capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getItens(): array{
        return $this->itens;
    }

    public function setItens(array $itens): void
    {
        $this->itens = $itens;
    }

    public function getTamanhoOcupado(): int{
        return $this->tamanhoOcupado;
    }

    public function setTamanhoOcupado($tamanhoOcupado): void{
        $this->tamanhoOcupado = $tamanhoOcupado;
    }

    public function adicionar($item) {
        if($this->getCapacidadeMaxima() >= ($this->getTamanhoOcupado() + $item->getTamanho())){
            array_push($this->itens, $item);
            $this->setTamanhoOcupado($this->getTamanhoOcupado() + $item->getTamanho());
            echo "<br>O item {$item->getName()} foi adicionado ao inventário! <br>";
        } else{
            echo "Não é possivel guardar o item {$item->getName()} pois ultrapassa a capacidade
            máxima de Itens em seu inventário! <br>";
        }
        
    }

    public function remover($item){
        foreach($this->itens as $key =>$itens){
            if ($item == $itens) {
                unset($this->itens[$key]);
                $this->setTamanhoOcupado($this->getTamanhoOcupado() - $item->getTamanho());
                echo "O item {$item->getName()} foi removido!<br>";
                return true;
                
            }
        }
    }

    public function capacidadeLivre(){
        $capacidadeLivre = $this->capacidadeMaxima - $this->tamanhoOcupado;
        echo "<br>A capacidade livre do inventário é de {$capacidadeLivre}, de um total de
        {$this->getCapacidadeMaxima()} <br>";
    }

}

//$inventario1 = new Inventario();
//$item1 = new Item('Infusão de Ceiva Curativa' ,2,'Arcano');
//$item2 = new Item('Lâmina de projeção' ,3,'Mágico');
//$item3 = new Item('Barragem de micro-mísseis' ,4,'Escudo/Mágico');
//$inventario1->adicionar($item1);
//$inventario1->adicionar($item2);
//$inventario1->adicionar($item3);
//$item4 = new Item('Cota de malha de Esqueleto Gigante dos Alpes' ,14,'Escudo');
//$inventario1->adicionar($item4);
//$inventario1->remover($item3);
//$inventario1->adicionar($item4);
//$inventario1->capacidadeLivre();