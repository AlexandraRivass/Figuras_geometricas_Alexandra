<?php
require_once "figuras.php";

//hereda de FiguraGeometrica
class Triangulo extends FiguraGeometrica{

    //ATRIBUTOS
    private $lado2;
    private $lado3;

    //CONSTRUCTOR
    //parent: es para los datos que ya guarda el padre.
    public function __construct($tipoFigura, $lado1, $lado2, $lado3){
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    //LADO2
    public function setLado2($lado2){
        $this->lado2 = $lado2;
    }
    public function getLado2(){
        return $this->lado2;
    }

    //LADO3
    public function setLado3($lado3){
        $this->lado3 = $lado3;
    }
    public function getLado3(){
        return $this->lado3;
    }

    //CALCULAR-AREA

    //CALCULAR-PERIMETRO

    //__TOSTRING
}
?>