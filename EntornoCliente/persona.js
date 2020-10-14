function Persona(){
    this.nombre;
    this.edad;
    this.envejecer = () => {
        with(this){
            return edad >= 21 ? edad-= 10  : edad; 
        }
    }
}
var nnombre = prompt("dame el nombre");
var eedad = parseInt(prompt("dame tu edad"));

var per = new Persona();
per.nombre = nnombre;
per.edad = eedad;
console.log(per.nombre);
console.log(per.edad);
per.envejecer();
console.log(`edad nueva: ${per.edad}`);
console.log("------");

for (var mivar in per) {
    document.write(`<pre> variable: ${mivar} , y su valor es ${per[mivar]}`);
}