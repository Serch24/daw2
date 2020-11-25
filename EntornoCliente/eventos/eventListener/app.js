var cont = 0;
    /* document.getElementById("miboton").addEventListener("click",()=>{
    console.log(`Me presionaste ${cont} veces D:`);
    cont++;
}) */
var arrai = ["1.jpg","2.jpg"];
document.getElementById("miboton").addEventListener("click",()=>{
    if(cont == 1){
        cont=0;
    }else{
        cont++; 
    }
    document.images[0].src = arrai[cont];
    console.log(cont);
})