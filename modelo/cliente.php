<?php

class cliente{
public  $Id;
public $NombreApellido;
public $NumeroDocumento;

public function MostrarPropiedades(){
    echo 'Cliente <br>';
    echo '----------------------- <br>';
    echo 'Nombre y Apellido :'. $this->NombreApellido.'<br>' ;
    echo 'Numero de documento :'. $this->NumeroDocumento. '<br>' ;
}

}