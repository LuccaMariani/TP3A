<?php

include "empleado.php";

class Fabrica
{
    private $_cantidadMaxima;
    private $_empleados = array();
    private $_razonsocial;
    
    public function __construct(string $razonsocial)
    {   
        //$this->_empleados[] = new Empleado("Kevin","Pelado","22548726","M","10","Mañana","25");
        $this->_cantidadMaxima = 3;
        $this->_razonsocial = $razonsocial;
    }

    public function AgregarEmpleados(Empleado $empleado)
    {  
        $retorno = false;

        if($this->_cantidadMaxima > count($this->_empleados))
        {
            $this->_empleados[] = $empleado;
            $retorno = true;
        }

        $this->_empleados = $this->EliminarEmpleadosRepetidos();

        return $retorno;
    }    

    public function EliminarEmpleado(Empleado $empleado)
    {  
        $retorno = false;

        $devolucionBuscador = array_search($empleado, $this->_empleados);

        if($devolucionBuscador != false)
        {
            unset($this->_empleados[$devolucionBuscador]);
            $retorno = true;
        }

        return $retorno;
    }
    
    private function EliminarEmpleadosRepetidos()
    {  
        return array_unique($this->_empleados);
    } 

    public function toString()
    {
        $string = "<br>Fabrica<hr>";

        foreach($this->_empleados as $e)
        {
            $string = $string . $e->toString()."<br>" ;
        }

        $string = $string . "<hr>";

        return $string;
    }
}

?>