<?php

require_once('../servidor.php');

$servidorSoap = new SoapServer('http://127.0.0.1/calculadora/servidor/wsdl/calculadora.wsdl');
$servidorSoap->setClass('Servidor');
$servidorSoap->handle();
