<?php
require_once 'modelo/cliente.php' ;
require_once 'modelo/marca.php' ;
require_once 'modelo/producto.php' ;
require_once 'modelo/proveedor.php' ;

$cliente = new cliente();
$cliente->id ='1';
$cliente->NombreApellido='Juan';
$cliente->NumeroDocumento='22314263';

$cliente ->MostrarPropiedades();

$marca = new marca();
$marca->Id= '2';
$marca->Descripcion='bagley';
$marca->Codigo= '311';

$producto = new producto();
$producto->Id='3';
$producto->Codigo='214';
$producto->Descripcion='Galletas';
$producto->Marca= $marca;

$proveedor = new proveedor ();
$proveedor->Id='4';
$proveedor->NombreApellido='Pedro';
$proveedor->NumeroDocumento='21563980';
$proveedor->Producto= $producto;

$proveedor->MostrarPropiedades();
