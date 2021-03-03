const posicion = document.querySelector(".posicion");
const numero_visita = document.querySelector(".numero_visita");
const lat = document.querySelector(".lat");
const lon = document.querySelector(".lon");
lat.style.display = "none";
lon.style.display = "none";

const caducidad = ({ fecha }) => {
        return parseInt(fecha) >= new Date().getTime();
};

const visita = () => {
        const cookie = localStorage.length;
        if (cookie) {
                let toda_cookie = JSON.parse(localStorage.getItem("datos"));
                let resultado = caducidad(toda_cookie);
                if (!resultado) {
                        localStorage.clear();
                        console.log("cookie caducada");
                } else {
                        let a = parseInt(toda_cookie.visita) + 1;
                        toda_cookie.visita = a;
                        localStorage.setItem(
                                "datos",
                                JSON.stringify(toda_cookie)
                        );
                }
        } else {
                let datos = {
                        fecha: new Date().getTime() + 1000 * 60,
                        visita: 1,
                };
                localStorage.setItem("datos", JSON.stringify(datos));
        }
        numero_visita.textContent += ` ${
                JSON.parse(localStorage.getItem("datos")).visita
        }`;
        console.log(JSON.parse(localStorage.getItem("datos")).visita);
};

const localizacion = () => {
        navigator.geolocation.getCurrentPosition(
                (e) => {
                        lat.style.display = "block";
                        lon.style.display = "block";
                        lat.textContent += ` ${e.coords.latitude}`;
                        lon.textContent += ` ${e.coords.longitude}`;
                },
                () => {
                        lat.style.display = "none";
                        lon.style.display = "none";
                }
        );
};
visita();
localizacion();
