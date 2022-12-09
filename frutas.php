<?php
   $respuestas = array(
       "pizza",
       "hamburguesa",
       "perro caliente",
       "pan con cafe"
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>