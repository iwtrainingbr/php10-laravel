<?php

class Pessoa
{
    public $nome;

    public function __construct(string $nome)
    {
        $this->nome = ucwords($nome);
    }

    public function __toString(): string
    {
        return $this->nome;
    }

    // public function __get();

    // public function __set();

   

    public function __destruct()
    {
        // $this->con->close();
    }

    public function __invoke()
    {
        return "TEstando";
    }
}

// $a = new Pessoa();
// $a->nome = "chiquim";
$a = new Pessoa('chiquim');

echo "Oi, eu sou " . $a;

echo $a();