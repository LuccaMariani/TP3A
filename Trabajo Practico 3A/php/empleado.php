<?php

class Empleado extends Persona
{
    protected $_legajo;
    protected $_sueldo;
    protected $_turno;
    
    public function __construct(string $nombre, string $apellido, int $dni, $sexo, int $legajo, $sueldo, string $turno)
    {
        parent::_construct($nombre, $apellido, $dni, $sexo);

        $this->_legajo = $legajo;
        $this->_sueldo = $sueldo;   
        $this->_turno = $turno;
    }

    public function GetLegajo()
    {
        return $this->_legajo;

    }    public function GetSueldo()
    {
        return $this->_sueldo;

    }    public function GetTurno()
    {
        return $this->_turno;
    }

    public function Hablar($idioma)
    {
        return "hablar";
    }

    public function toString()
    {   
        //return "tostring";
        return parent::toString() . " - " .$this->Getlegajo() . " - " . $this->GetSueldo() ." - " .  $this->GetTurno();    
    }

}

?>