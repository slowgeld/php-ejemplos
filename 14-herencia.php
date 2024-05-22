<?php

class  Animal{
    public $nombre;
    public $color;
    public $estaExtincion;
    public $archivoSonido;

    public function __construct($nombre1, $color1, $estaExtincion1, $archivoSonido1){
        $this->nombre = $nombre1;
        $this->color = $color1;
        $this->estaExtincion = $estaExtincion1;
        $this->archivoSonido = $archivoSonido1;
    }

    public function obtenerInformacion(){
        $mensaje = "nombre : ".$this->nombre." \n".
        "color : ";
        
        if($this->color == "verde"){
            $mensaje.= "\033[32m".$this->color."\033[0m"." \n";
        } elseif($this->color == "rojo"){
            $mensaje.= "\033[31m".$this->color."\033[0m"." \n";
        } elseif($this->color == "amarillo"){
            $mensaje.= "\033[33m".$this->color."\033[0m"." \n";
        } else {
            $mensaje.= $this->color." \n";
        }
        
        $mensaje.= "En Extincion? : ".($this->estaExtincion? "si" : "no");
        return $mensaje;
    }
    
    public function hacerSonido(){
        $audiofile =  "c:\\xampp\\htdocs\\php.examples\\".$this->archivoSonido;
        shell_exec("star wmplayer ".escapeshellarg($audiofile));
    }
}

class Perro extends Animal{
    public function hacerSonido($sonido=""){
        parent::hacerSonido();
        return $sonido;
    }
}

class Gato extends Animal{
    public function hacerSonido($sonido=""){
        parent::hacerSonido();
        return $sonido;
    }
}

class Pollo extends Animal{
    public function hacerSonido($sonido=""){
            parent::hacerSonido();
            return $sonido;
}
}
?>