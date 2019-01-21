<?php

	// Clase
    require_once('cliente.php');

    // Ruta donde se encuentra el wsdl
    define('RUTA_WSDL', 'wsdl/calculadora.wsdl');

    // Guarda el objeto en una variable
    $clienteSoap = new SoapClient(RUTA_WSDL);

    // Recoge que operacion se va a realizar
    $accion = $_POST["operacion"];
    $numero1 = $_POST["num1"];
    $numero2 = $_POST["num2"];

    $textoSalida = "El resultado de la " . $accion . " es: ";

    // Operacion a realizar
    switch($accion){
    	/*
			1. Llamar a la funcion encargada de realizar la accion (En el wsdl, seccion element)
			2. Llamar a la funcion encargada de mostrar el resultado de la accion (En el wsdl, element)
    	*/
		case "resta":
			$operacion = $clienteSoap->resta($numero1, $numero2);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
		case "multiplicacion":
			$operacion = $clienteSoap->multiplica($numero1, $numero2);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
        case "division":
        	$operacion = $clienteSoap->divide($numero1, $numero2);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
        case "raizCuadrada":
        	$operacion = $clienteSoap->raizCuadrada($numero1);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
        case "seno":
        	$operacion = $clienteSoap->seno($numero1);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
        case "coseno":
        	$operacion = $clienteSoap->coseno($numero1);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
        case "tangente":
        	$operacion = $clienteSoap->tangente($numero1);
			$textoSalida .= $operacion;
            echo $textoSalida;
            break;
		default:
            $operacion = $clienteSoap->suma($numero1, $numero2);
            $textoSalida .= $operacion;
            echo $textoSalida;
            break;
    }