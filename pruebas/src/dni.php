<?php

final class DniEjemplo{



    private $dni;

    public function __construct(string $dni){
        if(strlen($dni) > 9){
            throw new LengthException("Demasiado largo");
        }else if(strlen($dni) < 7){
            throw new LengthException("Demasiado corto");
        }else{
            $this->$dni=$dni;

        }
    }
    public static function fromString(string){
        return new self("dni");
    }
}