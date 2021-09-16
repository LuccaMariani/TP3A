

function AdministrarValidaciones() 
{
    
    var dni : number = parseInt((<HTMLInputElement> document.getElementById("txtDni")).value);
    var sexo : string = (<HTMLInputElement> document.getElementById("cboSexo")).value;
    var apellido : string = (<HTMLInputElement> document.getElementById("txtApellido")).value;
    var nombre : string = (<HTMLInputElement> document.getElementById("txtNombre")).value;
    
    var legajo : number = parseInt((<HTMLInputElement> document.getElementById("txtLegajo")).value);
    var sueldo : number = parseInt((<HTMLInputElement> document.getElementById("txtSueldo")).value);
    var turno : string = (<HTMLInputElement> document.getElementById("rdoTurno")).value;


    ValidarCamposVacios(dni.toString && sexo && apellido && nombre && legajo.toString  && sueldo.toString  && turno)

    ValidarRangoNumerico(dni,1000000,55000000)
    ValidarRangoNumerico(legajo,1000000,55000000)
    ValidarRangoNumerico(sueldo,1000000,55000000)



}


//  Campos no vacíos.
function ValidarCamposVacios(cadenaValidar:string):boolean
{
    let retorno = false;

    if(cadenaValidar.length > 0)
    {
        retorno = true;
    }
    return retorno;
}


//  Rangos numéricos correctos.
function ValidarRangoNumerico(numeroValidar:number,numeroMin:number,numeroMax:number):boolean
{
    let retorno = false;

    if(numeroValidar >= numeroMin && numeroValidar<=numeroMax)
    {
        retorno = true;
    }
    return retorno;
}

//  Selección del sexo.
function ValidarCombo(cadena:string,cadena2:string):boolean
{
    let retorno = false;


    return retorno;
}

//  Verificación del tuno y sueldo máximo.
function ObtenerTurnoSeleccionado():string
{



    return "";
}

function ObtenerSueldoMaximo(cadena:string):number
{
    return 0;
}