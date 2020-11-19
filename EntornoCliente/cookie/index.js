let uno = document.cookie= "numero=1";
cadena = uno.split("=");
sumar = parseInt(cadena[1])+1;
console.log(sumar);
document.cookie = "numero="+ sumar+"";
console.log(document.cookie);
// function ver() {
//     alert(`Has ingresado ${document.cookie.split("=")[1]} veces`)
// 
document.documentElement
