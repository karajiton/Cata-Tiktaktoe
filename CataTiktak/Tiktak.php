<?php
class Tiktak{
    public function checkFiles($matriz): string|bool{
        foreach($matriz as $valores){
         $resultado = array_unique($valores);
         if (count($resultado) === 1 && ($resultado[0] === "X" || $resultado[0] === "O")) {
           return $resultado[0];
         }
         }
         return false ;
        }
    public function checkColumns($matriz): string|bool{
     for ($columna = 0; $columna < 3; $columna++) {
       $valorInicial = $matriz[0][$columna];
       if ($matriz[1][$columna] === $valorInicial && $matriz[2][$columna] === $valorInicial) {
           return $valorInicial; 
       }
   }
   return false;
   }
   public function checkDiagonal($matriz): string|bool{
     foreach($matriz as $valores){
       foreach($valores as $valor){
         if(($matriz[0][0] == $matriz[1][1] && $matriz[1][1] == $matriz[2][2])||($matriz[0][2] == $matriz[1][1] && $matriz[1][1] == $matriz[2][0])){
         return $resultado = $matriz[2][2];
   
       }
     }
     }
   return false ;
   }
   public function checkresult($matriz): string|bool{
      $resultado1 = $this->checkFiles($matriz);
       $resultado2 = $this->checkColumns($matriz);
       $resultado3 = $this->checkDiagonal($matriz);
     if ($resultado1 === $resultado2 && $resultado2 === $resultado3) {
           return false; 
       }
       if ($resultado1 !== $resultado2 && $resultado1 !== $resultado3) {
           return $resultado1; 
       } elseif ($resultado2 !== $resultado1 && $resultado2 !== $resultado3) {
           return $resultado2; 
       } else {
           return $resultado3; 
       }
   }
   
   
   
   public function resul($resultado){
     if ($resultado == false){
       echo "Es un empate!!" . PHP_EOL;
     }else{ 
       echo "El ganador es : " . $resultado . PHP_EOL;
     }
   }
   
}