<?php
require_once "models/dividir.php";

class DividirController{

    public function irDivision(){
        require_once "views/dividir/index.php";
    }
    public function guardar(){
        $dividendo = isset($_POST['dividendo']) ? $_POST['dividendo'] : false;
        $divisor = isset($_POST['divisor']) ? $_POST['divisor'] : false;

            try{
                if ($dividendo && $divisor && $divisor !=0){
                    $div = new Dividir();
                    $div->setDividendo($dividendo);
                    $div->setDivisor($divisor);
                    $div->calcular();
                    require_once "views/dividir/resultado.php";
                }else{
                    throw new Exception("No es posible dividir por cero");

                }
                
            }catch (Exception $e){
                echo $e->getMessage();
                }
            
        }
    }
