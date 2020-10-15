function Persona() {
    this.nombre;
    this.edad;
    this.envejecer = () => {
        with(this) {
            return edad >= 20 ? edad -= 10 : edad;
        }
    }
}
var nnombre = prompt("dame el nombre");
var eedad = parseInt(prompt("dame tu edad"));

var per = new Persona();
per.nombre = nnombre;
per.edad = eedad;
<<<<<<< HEAD

console.log(`${per.nombre} tiene ${per.edad} años`);
console.log("después de envejecer...");
console.log(`${per.nombre} tiene ${per.envejecer()} años`);
=======
console.log(per.nombre);
console.log(per.edad);
per.envejecer();
console.log(`edad nueva: ${per.edad}`);
console.log("------");

for (var mivar in per) {
    document.write(`<pre> variable: ${mivar} , y su valor es ${per[mivar]}`);
}
>>>>>>> b8955503df5ca6400972f926ef02593fa446f422
