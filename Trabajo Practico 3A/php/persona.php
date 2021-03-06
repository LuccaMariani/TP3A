<?php

abstract class Persona
{
    public $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;

    public function _construct($nombre, $apellido,$dni, $sexo)
    {
        $this->_apellido = $apellido;
        $this->_dni = $dni;
        $this->_nombre = $nombre;
        $this->_sexo = $sexo;
    }

    public function GetApellido()
    {
        return $this->_apellido;
    }

    public function GetDni()
    {
        return $this->_dni;
    }

    public function GetNombre()
    {
        return $this->_nombre;
    }

    public function GetSexo()
    {
        return $this->_sexo;
    }

    public abstract function Hablar($idioma);

    public function toString()
    { 
        return  $this->GetNombre() . " - " .$this->GetApellido() . " - " . $this->GetDni() ." - " .  $this->GetSexo();
    }

}

?>