const form = document.forms[0];
const foto = document.querySelector("#foto");
const nombre = document.querySelector("#nombre");
const radio = document.querySelectorAll(".radio");
const h1 = document.querySelector(".cookie");
let tmp = false;

foto.addEventListener("click", () => {
        radio.forEach((v) => {
                if (v.checked) {
                        tmp = true;
                }
        });

        if (nombre.value !== "" && tmp === true) {
                form.submit();
        } else {
                alert("Debes rellenar los datos");
        }
});

if (document.cookie.length === 0) {
        h1.innerHTML = "No hay cookies creadas";
} else {
        h1.innerHTML = document.cookie;
}
