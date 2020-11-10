var b;
function segundos(){
    var a = window.open('https://hub.docker.com/_/php/',"a","toolbar=yes,scrollbars=yes,resizable=yes,top=200,left=500,width=600,height=400");
    clearInterval(b);
}
b = setInterval("segundos()",3000)