document.onreadystatechange = () => {
        if (document.readyState == "interactive") {
                inicio();
        }
};

const inicio = () => {
        const fechaPrimerMovimiento = document.querySelector(
                "#fechaPrimerMovimiento"
        );
        const fechaUltimoMovimiento = document.querySelector(
                "#fechaUltimoMovimiento"
        );
        const enviar = document.querySelector(".enviar");

        comprobarFecha();
        /*comprobarNumeroCuenta();*/
};

const comprobarFecha = () => {
        const errorFecha = document.querySelector(".errorFecha");
        errorFecha.style.display = "none";
        fechaUltimoMovimiento.addEventListener("change", () => {
                if (fechaUltimoMovimiento.value) {
                        const fechaPriDate = new Date(
                                Date.parse(fechaPrimerMovimiento.value)
                        );
                        const fechaUltDate = new Date(
                                Date.parse(fechaUltimoMovimiento.value)
                        );
                        errorFecha.style.display =
                                fechaPriDate.getTime() > fechaUltDate.getTime()
                                        ? "block"
                                        : "none";
                        /*const tmp = fechaPrimerMovimiento.value;
                        fechaPrimerMovimiento.value =
                                fechaUltimoMovimiento.value;
                        fechaUltimoMovimiento.value = tmp;*/
                }
        });
};

const comprobarNumeroCuenta = () => {
        numCuenta.addEventListener("input", () => {
                console.log(numCuenta.value);
        });
};
