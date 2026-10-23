<?php
require_once "figuras.php";
class Rectangulo extends FiguraGeometrica{

    private $lado2;

    public function __construct($tipoFigura, $lado1, $lado2){
        //Nuevo atributo
        $this->lado2 = $lado2;
        //lo que hereda
        parent::__construct($tipoFigura, $lado1);
    }
    public function __destruct(){
        // echo "adiós";
    }
    //ESTO ES ALTURA
    //--SET-(GUARDA)
    public function setLado2($lado2){
        $this->lado2=$lado2;
    }

    //--GET-(OBTENER)
    public function getLado2(){
        return $this->lado2;
    }

    //Área: base × altura
    //Perímetro: 2 × base + 2 × altura
    
    ////CALCULAR-AREA
    public function calcularArea(){
        return $this->getLado1() * $this->getLado2();
    }

    //CALCULAR-PERIMETRO
    public function calcularPerimetro(){
        return 2 * $this->getLado1() + 2 * $this->getLado2();
    }

    public function __toString(){
        return "Tipo de figura: " . $this->getTipoFigura() . "<br>" . "Base: " . $this->getLado1() . "<br>" . "Altura: " . $this->getLado2() . "<br>" . "Área: " . $this->calcularArea() . "<br>" . "Perímetro: " . $this->calcularPerimetro();
    }
    
}

?>