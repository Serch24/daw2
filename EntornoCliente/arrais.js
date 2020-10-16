//7 provincias y luego el numero a visualizar.
var provincias = ["Barcelona","cadiz","burgos","granada","huelva","badajoz", "huesca"];

for (let i = 0; i < provincias.length; i++) {
    document.write(`<h3>${i}.) ${provincias[i]}</h3>`);
    
}

var num = parseInt(prompt("escribe un numero del 0 al 6"));
while(num>=0 && num<=6){
    document.write(` <h1>Provincia elegida: ${provincias[num]}</h1>`);
    num = parseInt(prompt("vuelve y escribe un numero del 0 al 6"));
}
document.write("<p>Saliendo...</p>");