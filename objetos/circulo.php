<?php
require_once "figuras.php";

//hereda de FiguraGeometrica
class Circulo extends FiguraGeometrica{

    public function __construct($tipoFigura, $lado1){
        //parent:es para los datos que ya guarda el padre.
        parent::__construct($tipoFigura,$lado1);
    }
    public function __destruct(){
        // echo "adiós";
    }
    // Área: π × radio × radio
    // Perímetro: 2 × π × radio

    //RADIO = lado1
    //CALCULAR-AREA
    public function calcularArea(){
        return round(M_PI * $this->getLado1() * $this->getLado1(), 2);    
    }

    //CALCULAR-PERIMETRO
    public function calcularPerimetro(){
        return round(2 * M_PI * $this->getLado1(),2);
    }


    public function __toString(){
    return "Tipo de figura: " . $this->getTipoFigura() . "<br>". "Radio: " . $this->getLado1() . "<br>"
    . "Área: " . $this->calcularArea() . "<br>"
    . "Perímetro: " . $this->calcularPerimetro();
    }
}
?>