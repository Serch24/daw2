//Hacer un programa que pida el número de la última papeleta vendida y
//muestre un valor aleatorio entre cero y el número introducido

//let papeleta = parseInt(prompt("Escribe el numero de la papeleta"));
//let numAleatorio = Math.floor(Math.random() * papeleta);
//console.log(`El numero aleatorio es: ${numAleatorio}`);

//1x08
//Hacer un programa que muestre los valores del seno de x grados, de 0 a 400, teniendo en cuenta la siguiente relación:
//1 radián = 60 grados (360 / 2 / Math.PI)

for (let i = 0; i <= 400; i++) {
    console.log(`El seno de ${i} es: ${Math.sin(i*(Math.PI/180))}`);
}