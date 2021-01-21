<?php
   if(isset($_POST['edad'])){
           $edad = (int)$_POST['edad'];
           if($edad >= 18){
                   echo "Es mayor de edad";
           }else{
                   echo "No es mayor de edad";
           }
   }else{
           echo "No se ha enviado el formulario";
   }
?>
