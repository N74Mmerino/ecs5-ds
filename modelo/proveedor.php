<?php

class proveedor{
    public $Id;
    public $NombreApellido;
    public $NumeroDocumento;
    public $Producto;

    public function MostrarPropiedades(){
        echo '----------------------- <br>';
        echo 'Proveedor<br>';
        echo '----------------------- <br>';
        echo 'Nombre y apellido : '.$this->NombreApellido.'<br>';
        echo 'Número de documento : ' .$this->NumeroDocumento.'<br>';
        echo '----------------------- <br>';
        echo 'Producto <br>';
        echo '----------------------- <br>';
        echo 'Descripcion del producto :'.$this->Producto->Descripcion.'<br>';
        echo 'Codigo del producto :'.$this->Producto->Codigo.'<br>';
        echo '----------------------- <br>';
        echo 'Marca <br>';
        echo '----------------------- <br>';
        echo'Descripcion de la marca :'.$this->Producto->Marca->Descripcion.'<br>' ;
        echo'Codigo de la marca :'.$this->Producto->Marca->Codigo.'<br>' ;
    }
}