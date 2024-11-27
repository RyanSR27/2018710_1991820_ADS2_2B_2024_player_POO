<?php

class Item {

    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe)
    {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);        
    }

    public function getName(): string {
        return $this->name;
    }
    
    public function setName(string $name): void {
        if (empty($name)) {
            echo "Digite o nome do item";
        } else {
            $this->name = $name;
        }
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void {
        $this->tamanho = $tamanho;
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        $this->classe = $classe;
    }
}

//$item1 = new Item("Espada", 3, "Mágico");
//echo "O item {$item1->getName()}, com tamanho {$item1->getTamanho()} de classe {$item1->getClasse()} foi adicionado aos itens! <br>";
//echo "{$item1->getTamanho()} <br>";
//echo $item1->getClasse();

