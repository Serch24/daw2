function comprobar(){
    let numero = parseInt(document.querySelector(".edad_persona").value);
    console.log(numero>120? "nope" : "bro pasa")
}

$(function () {
    $('.example-popover').popover({
      container: 'body'
    })
  })