<?php

$persona = [
            "nombre" => "Pedro",
            "apellidos" => "Sanchez",
            "edad" => 50
          ];
          
          foreach($persona as $valor){
            echo  "$valor <br>";
          }
$auto = [
            "Marca" => "Ford",
            "Modelo" => "Focus",
            "Año" => 2017
          ];
          
          foreach($persona as $posicion => $valor){
            echo  "$posicion: $valor <br>";
          }
?>
