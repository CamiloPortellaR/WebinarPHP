<?php

class OperacionesAritmeticas
  {
     public function arreglo()
     {
       $arreglo = array("Valor 1","Valor 2","Valor 3","Valor 4","Valor 5");
       //echo $arreglo[7];
       
       $arreglo2 = array(1=>"pos1",2=>"pos 2",0=>"pos 0");
       //echo $arreglo2[0];
       
       $arreglo3[0]="pos 0";
       $arreglo3[4]="pos 4";
       //echo $arreglo3[4];
       
       $arreglo4 = array("pos 1"=>"Claudio","pos 2"=>"Mario","pos 3"=>"Maria");
       echo $arreglo4["pos 3"];
     }
  
     public function suma($datos_r)
      {
        $resultado = $datos_r[0]+$datos_r[1]+$datos_r[2]+$datos_r[3]+$datos_r[4];
        return $resultado;
      }
       public function resta($datos_r)
      {
        $resultado = $datos_r[0]-$datos_r[1]-$datos_r[2]-$datos_r[3]-$datos_r[4];
        return $resultado;
      }
       public function multi($datos_r)
      {
        $resultado = $datos_r[0]*$datos_r[1]*$datos_r[2]*$datos_r[3]*$datos_r[4];
        return $resultado;
      }
        public function divide($datos_r)
      {
        $resultado = $datos_r[0]/$datos_r[1]/$datos_r[2]/$datos_r[3]/$datos_r[4];
        return $resultado;
      }
    public function mostrarvalor()
    {
      echo $resultado;
    }
      
  }

$datos= array(5,1,2,3,4);

$objetoOperaciones = new OperacionesAritmeticas();
echo "La suma es :".$objetoOperaciones->suma($datos)."</br>";
echo "La resta es :".$objetoOperaciones->resta($datos)."</br>";
echo "La multiplicacion es :".$objetoOperaciones->multi($datos)."</br>";
echo "La divicion es :".$objetoOperaciones->divide($datos)."</br>";
?>
