const cargando = document.querySelector(".loading");
const enviar = document.querySelector(".enviar");
const respuesta = document.querySelector(".respuesta");
const url = `http://localhost:3431/sv.php`;
cargando.style.display = "none";

enviar.addEventListener("click", (e) => {
        e.preventDefault();

        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = () => {
                if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                                cargando.style.display = "none";
                                respuesta.textContent = xhr.responseText;
                        } else {
                                console.log("algo pasó");
                        }
                } else {
                        cargando.style.display = "block";
                }
        };
        xhr.open("GET", url, true);
        xhr.send();
});
