<?php
    trait Hola{
        public function saludo($saludo){
            echo $saludo ." desde trait Hola <br>"; 
        }
    }

    trait Adios{
        /*use Hola;*/
        public function saludo($saludo)
        {
                echo $saludo . " desde clase Adios <br>";
        }
    }
    class mensaje{ 
        use Hola,Adios
        {
            /*Hola::saludo insteadof Adios;*/
            
            Adios::saludo insteadof Hola;
            Hola:: saludo as banana;
        } 
    }


    $vari = new mensaje();
    $vari->saludo("serch");
    $vari->banana("aaa");
    /*$var = new Hola();
    Los trait no se pueden intanciar, si lo haces sale un 
           error qwq; 
    $var->saludo("andrés");*/



?>

