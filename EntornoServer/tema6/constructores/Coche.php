<?php
error_reporting(E_ALL);

class Coche{
	//propiedades
	private $color;
	private $velocidad;
	const VELOCIDAD_MAXIMA = 120;
	const COLOR_SERIE = "blanco";
	const VELOCIDAD_INICIAL = 0;
	
	//constructores
	/*
	- no recibe nada: inicialice los valores a color=<COLOR DE SERIE>, velocidad =<VELOCIDAD INICIAL >
	- recibe la color: color será el que nos dan,  y la velocidad la inicial
	- recibe la color y la velocidad: inicializa las propiedades con los valores que nos dan. 
	
	*/
	public function __construct(){
		// $variables = func_get_args();
		$tamanio = func_num_args();
		if ($tamanio==0) {
			$this->color = self::COLOR_SERIE;
			$this->velocidad = self::VELOCIDAD_INICIAL; 
			echo "0 argumentos<br>";	
		}elseif($tamanio==1){
			$this->color = func_get_arg(0);
			$this->velocidad = self::VELOCIDAD_INICIAL; 
			echo "1 argumentos<br>";	

		}elseif ($tamanio==2) {
			$this->color = func_get_arg(0);
			$this->velocidad = func_get_arg(1);
			echo "2 argumentos<br>";	
 			
		}
	}

}
//PROGRAMA PRINCIPAL.
$mio = new Coche("negro",2);
?>