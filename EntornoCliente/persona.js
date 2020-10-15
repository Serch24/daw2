function Persona() {
    this.nombre;
    this.edad;
    this.envejecer = () => {
        with(this) {
            return edad >= 20 ? edad -= 10 : edad;
        }
    }
}
var nnombre = (prompt("dame el nombre"));
var eedad = parseInt(prompt("dame tu edad"));

var per = new Persona();
per.nombre = nnombre;
per.edad = eedad;

console.log(`${per.nombre} tiene ${per.edad} años`);
console.log("después de envejecer...");
console.log(`${per.nombre} tiene ${per.envejecer()} años`);