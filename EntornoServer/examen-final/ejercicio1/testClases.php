<?php
$ale = new Alergeno("gluten", 200, 56, 42);
$ale2 = new Alergeno("huevo", 20, 46, 102);
$ale3 = new Alergeno("frutos_secos", 100, 6, 255);

$ing = new Ingrediente("sal", 121, 200, 3, $ale);
$ing2 = new Ingrediente("azucar", 11, 200, 1);
$ing3 = new Ingrediente("remolacha", 21, 200, 2, $ale2);
$ing4 = new Ingrediente("perejil", 141, 200, 4, $ale3);

$pla = new PlatoPreparado("Macarrones con chorizo", 2);
$pla2 = new Plato("Ensalada de tomates y nueces");

$pla->add($ing, 30);
$pla2->add($ing3, 600);

$pla->muestraPlato();
$pla2->muestraPlato();

?>
