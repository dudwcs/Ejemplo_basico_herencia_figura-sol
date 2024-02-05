<?php
class Figura
{
    protected int $num_lados;
    protected string $nombre;

    

    public function calcularArea()
    {
        echo "<p> Calculando el área de $this->nombre ...</p>";
    }

    public function __construct(string $nombre, int $num_lados = 0)
    {
        $this->nombre = $nombre;
        $this->num_lados = $num_lados;
    }


    
}