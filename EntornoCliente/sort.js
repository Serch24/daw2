let arrai = ["sergio", "lol", "arroz"];
let arrai2 = [4, 66, 1, 11];
console.log(arrai.sort());
console.log(arrai2.sort((a, b) => a - b));
/* array de objetos y quiero ordenar ascendentemente por edad */

let persona = {
        nombre: "sergio",
        edad: 22,
};
let person2 = {
        nombre: "andres",
        edad: 1,
};

let person3 = {
        nombre: "aaaa",
        edad: 2,
};

let per = [persona, person3, person3];

console.log(per.sort((a, b) => b.edad - a.edad));
