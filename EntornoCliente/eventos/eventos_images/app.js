/* let arrai = ["1.jpg","2.jpg"];
var cont = 0;
document.images[0].onclick = ()=>{
    if (cont == 1) {
        cont=0;
    }else{
        cont++;
    }
    // open(arrai[cont]);
    document.images[0].src = arrai[cont];
    console.log(cont);
} */

async function api(url = "") {
    await fetch(url)
    .then(function(responde){
        console.log(responde.blob());
    })
}
api("https://images.ctfassets.net")