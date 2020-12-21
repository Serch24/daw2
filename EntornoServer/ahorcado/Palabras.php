<?php
	class Palabras{
		public function __construct(){
		}
		public function mostrarPalabra(){
			$fichero = fopen("./palabras.txt","r");
			$get = fgets($fichero);
			return $get;
		}
	}

?>
