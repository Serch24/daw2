let arrai = ["1.jpg", "2.jpg"];
let contador = 1;
const img = document.querySelector("#lenin");
img.addEventListener("click", () => {
        if (contador == 1) {
                img.setAttribute("src", arrai[contador]);
                contador = 0;
        } else {
                img.setAttribute("src", arrai[contador]);
                contador++;
        }
});
