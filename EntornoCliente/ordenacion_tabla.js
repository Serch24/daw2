var numero = [];
var flag = false;

function burbuja() {
    do{
        numero.push(parseInt(prompt("Dame un numero")));
        flag = confirm("¿Desea continuar?");
        }while(flag);
        
        
        for (let i = 1; i < numero.length; i++) {
            for (let j = 0; j < (numero.length - i); j++) {
                if (numero[j]> numero[j+1]) {
                    var aux = numero[j];
                    numero[j] = numero[j+1];
                    numero[j+1] = aux;
        
                }
            }
        }
        console.log(numero.reverse());
}

