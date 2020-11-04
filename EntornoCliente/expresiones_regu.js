var a = new RegExp(/^(91|92)[0-9]{7,8}$/g);
var b = new RegExp(/^a[.]a$/g);
var c = new RegExp(/^[A-Z]{1}[0-9]{7}[A-Z]{1}$/g);
var d = new RegExp(/^[0-9]{4}\/((0[1-9])|(1[0-2]))\/[0-9]{1,2}$/g);
var e = new RegExp(/^((.{1,4}\.){0,4}).{1,3}@$/g);//me falta terminar esta ;C
var cadena = "919999812";
var eg = cadena.match(a);
console.log(eg);