var vehiculo = {
    Matricula: "R12O-23",
    Modelo:  "Renault Megane Classic 1.6",
    FechaMatriculacion: [2000,11,20]
};

var a = (e) => e.FechaMatriculacion;
var mili = new Date(a(vehiculo)[0],a(vehiculo)[1],a(vehiculo)[2]);
var hoy = new Date();
console.log((hoy-mili)/60/60/24);
// console.log(mili.getMilliseconds());