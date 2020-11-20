var globalID;

function repeatOften() {
  $("<div />").appendTo("body");
  globalID = requestAnimationFrame(repeatOften);
}

globalID = requestAnimationFrame(repeatOften);

$("#stop").on("click", function() {
  cancelAnimationFrame(globalID);
});
$("#start").on("click", function() {
  globalID = requestAnimationFrame(repeatOften);
});
