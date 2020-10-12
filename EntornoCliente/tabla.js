var numero = parseInt(prompt("dame un numero :D"));
document.write(`<h1>Tabla del ${numero}</h1>`);
for (let i = 1; i <= 10; i++) {
    document.write(`<p> ${i} x ${numero} = ${numero*i}</p>`);
}