<?php
    require_once "figuras.php";

    //hereda de FiguraGeometrica
    class Cuadrado extends FiguraGeometrica{
        // El constructor recibe el tipo y el lado, y se los pasa al padre, que es quien los guarda (en la clase padre son privados)
        public function __construct($tipoFigura, $lado1){
            //parent:es para los datos que ya guarda el padre.
            parent::__construct($tipoFigura,$lado1);
        }

        //CALCULAR-AREA
        // El área del cuadrado es lado por lado, cojo el lado con el getter porque desde aquí no puedo leerlo directo.
        public function calcularArea(){
            return $this->getLado1() * $this->getLado1();
        }


        //CALCULAR-PERIMETRO
        public function calcularPerimetro(){
            // Este método usa el getter del padre para obtener el lado del cuadrado,(porque lado1 es private y no se puede leer directamente),
            return $this->getLado1() * 4;
        }

        public function __toString(){
            //$this->getTipoFigura() y $this->getLado1(): son datos guardados, así que se piden con los getters.
            return "Tipo de figura: " . $this->getTipoFigura() . "<br>"
                . "Lado: " . $this->getLado1() . "<br>"
                . "Área: " . $this->calcularArea() . "<br>"
                . "Perímetro: " . $this->calcularPerimetro();
        }
    }

?>