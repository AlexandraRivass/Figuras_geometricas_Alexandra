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

    // Área (Herón): s = (lado1 + lado2 + lado3) / 2
    //  área = √( s × (s - lado1) × (s - lado2) × (s - lado3) )
    // Perímetro: lado1 + lado2 + lado3

    //CALCULAR-AREA
    public function calcularArea(){
        //s es el semiperímetro
        $s = ($this->getLado1() + $this->getLado2() + $this->getLado3()) / 2;

        // $this->getTitulo-> palabra suelta: PHP busca un atributo llamado "getTitulo" (no existe)
        // $this->getTitulo()-> ejecuta el método y devuelve el título

        //√ es la raíz cuadrada ESTO ES sqrt().
        return round(sqrt($s * ($s - $this->getLado1()) * ($s - $this->getLado2()) * ($s - $this->getLado3())), 2);
    }

    //CALCULAR-PERIMETRO
    public function calcularPerimetro(){
        return $this->getLado1() + $this->getLado2() + $this->getLado3();
    }
    //__TOSTRING
    public function __toString(){
        return "Tipo de figura: " . $this->getTipoFigura() . "<br>"
            . "Lado 1: " . $this->getLado1() . "<br>"
            . "Lado 2: " . $this->getLado2() . "<br>"
            . "Lado 3: " . $this->getLado3() . "<br>"
            . "Área: " . $this->calcularArea() . "<br>"
            . "Perímetro: " . $this->calcularPerimetro();
    }
}
?>