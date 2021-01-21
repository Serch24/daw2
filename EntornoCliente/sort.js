var arrai = ["sergio", "lol", "arroz"];
var arrai2 = [4, 66, 1, 11];
console.log(arrai.sort());
console.log(arrai2.sort((a, b) => a - b));
/* array de objetos y quiero ordenar ascendentemente por edad */

var persona = {
        nombre: "sergio",
        edad: 22,
};
var person2 = {
        nombre: "andres",
        edad: 1,
};

var person3 = {
        nombre: "aaaa",
        edad: 2,
};

var per = [persona, person3, person3];

console.log(per.sort((a, b) => b.edad - a.edad));
