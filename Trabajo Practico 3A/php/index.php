<?php

    include "persona.php";
    include "fabrica.php";

    $fabrica = new Fabrica("fabrica");

    $empleado = new Empleado("Nombre1", "Apellido1" , 111, "masculino", 001, 10000, "tarde");
    $empleado2 = new Empleado("Nombre2", "Apellido2" , 222, "femenino", 002, 20000, "noche");

    echo("<br>".$fabrica->AgregarEmpleados($empleado));

    echo("<br>".$fabrica->AgregarEmpleados($empleado2));

    echo("<br>".$empleado->Hablar('hola'));

    echo("<br>".$empleado->toString());

    echo("<br>".$fabrica->toString());

    $fabrica->EliminarEmpleado($empleado2);
    
    
    echo("<br>".$fabrica->toString());

?>
