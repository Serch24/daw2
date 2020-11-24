let arrai = ["https://www.google.com/","http://www.tiernogalvan.es/Departamentos/Informatica/web/profesores/santiago/P3/P3_C11/Resumen_1.html"];
var cont = 0;
document.images[0].onclick = ()=>{
    if (cont == 1) {
        cont=0;
    }else{
        cont++;
    }
    open(arrai[cont]);
    /* document.images[0].src = arrai[cont]; */
    console.log(cont);
}