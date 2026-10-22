<?php
    // LA CLASE es el molde: define qué datos tiene algo y qué sabe hacer.
    class FiguraGeometrica{

        //ATRIBUTOS
        private $tipoFigura;
        private $lado1;

        //CONSTRUCTOR
        //es el metodo que se ejecuta solo, al crear un objeto, y sirve para darle datos iniciales
        public function __construct($tipoFigura, $lado1){
            $this->tipoFigura = $tipoFigura;
            $this->lado1 = $lado1;
        }
        
        //ESTO ES TIPODEFIGURAS
        //--SET-(GUARDAR)
        public function setTipoFigura($tipoFigura){
            $this->tipoFigura = $tipoFigura;
        }
        
        //--GET-(MUESTRA)
        public function getTipoFigura(){
            return $this->tipoFigura;
        }

        //ESTO ES LADO1
        //--SET--(GUARDAR)
        public function setLado1($lado1){
           $this->lado1 = $lado1;
        }
        //--GET-.(MUESTRA)
        public function getLado1(){
            return $this->lado1;
        }  

        public function __destruct(){
            // echo "adiós";
        }
        //gamificaciom
        function calcularArea(){ 
            return 0;
        }

    }
?>