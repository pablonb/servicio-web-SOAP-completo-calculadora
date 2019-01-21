<?php

    // Definicion de la clase
    class Servidor{

    	// Devuelve el resultado de la suma
    	function suma($valor1, $valor2){
    		return $valor1 + $valor2;
    	}

    	// Devuelve el resultado de la resta
    	function resta($valor1, $valor2){
    		return $valor1 - $valor2;
    	}

    	// Devuelve el resultado de la multiplicacion
    	function multiplica($valor1, $valor2){
    		return $valor1 * $valor2;
    	}

    	// Devuelve el resultado de la division
    	function divide($valor1, $valor2){
    		return $valor1 / $valor2;
    	}

    	// Devuelve la raiz cuadrada del valor pasado
    	function raizCuadrada($valor){
    		return sqrt($valor);
    	}

    	// Devuelve el seno del valor pasado (en radianes)
    	function seno($valor){
    		return sin($valor);
    	}

    	// Devuelve el coseno del valor pasado (en radianes)
    	function coseno($valor){
    		return cos($valor);
    	}

    	// Devuelve la tangente del valor pasado (en radianes)
    	function tangente($valor){
    		return tan($valor);
    	}

    }