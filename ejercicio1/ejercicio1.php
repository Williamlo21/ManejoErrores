<?php
function dividir($dividendo,$divisor){
    try{
        if($divisor==0){
            throw new Exception("No es posible dividir por cero.");
        }
        $resultado = $dividendo / $divisor;
        return $resultado; 
    } catch (Exception $e){
        return $e->getMessage();

    }
}

$dividendo = 10;
$divisor = 0;
$resultado = dividir($dividendo,$divisor);

if (is_numeric($resultado)){
    echo "El resultado de la división es: " . $resultado;
}else{
    echo "Error: " . $resultado;
}