<?php
require_once("TV.php");
final class SmartTV extends TV 
{
    private $SistemaOperacional;

    public function __construct($marca, $polegadas, $SistemaOperacional)
    {
        parent::__construct($marca, $polegadas);
        $this->SistemaOperacional -> $SistemaOperacional;
       
    }
    public function getSistemaOperacional()
    {
        return $this->SistemaOperacional;
    }
    public function setcnjp($SistemaOperacional)
    {
        $this->SistemaOperacional = $SistemaOperacional;
    }
    
}