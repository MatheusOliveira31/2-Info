<?php
class TV
{

    protected $marca;
    protected $polegadas;
    protected $ligada;
    protected $canal;
    protected $volume;


    public function __construct($marca, $polegadas)
    {
        $this->marca = $marca;
        $this->polegadas = $polegadas;
        $this->ligada = false;
        $this->volume = 27;
        $this->canal = 11;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->$marca = $marca;
    }

    public function getPolegadas()
    {
        return $this->polegadas;
    }

    public function setPolegadas($polegadas)
    {
        $this->polegadas = $polegadas;
    }
    public function isLigada()
    {
        return $this->ligada;
    }
    public function getCanal()
    {
        return $this->canal;
    }
    public function getVolume()
    {
        return $this->volume;
    }
    public function ligar()
    {
        if ($this->ligada == false) {
            $this->ligada = true;
        }
    }
    public function desligar()
    {
        if ($this->ligada == true) {
            $this->ligada = false;
            $this->volume = 27;
            $this->canal = 11;
        }
    }
    public function aumentarVolume()
    {
        if ($this->ligada == true && $this->volume < 100) {
            $this->volume++;
        }
    }
    public function diminuirVolume()
    {
        if ($this->ligada == true && $this->volume > 0) {
            $this->volume--;
        }
    }
    public function trocarCanal($canal)
    {
        if ($this->ligada == true) {
           $this -> canal = $canal;
        }
    }

}
