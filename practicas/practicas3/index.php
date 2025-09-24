<?php

require_once ("ClassEmpleado.php");
require_once ("ClassCliente.php");

$objEmpleado = new Empleado(23456,"franco iglesias",25);
$objEmpleado->setpuesto("administrador");


echo $objEmpleado->getDatosPersonales();
echo "puesto: ".$objEmpleado->getpuesto();


$objCliente = new Cliente(11111,"santiago iglesias",79);
$objCliente->setcredito(10000);


echo $objCliente->getDatosPersonales();
echo "el credito es de: ".$objCliente->getcredito();

