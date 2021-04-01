let num_cuenta;
let bt;
let error;

document.onreadystatechange = () => {
        if (document.readyState == "interactive") {
                bt = document.querySelector(".enviar");
                num_cuenta = document.getElementById("numero_cuenta");
                error = document.querySelector(".error");
                error.style.display = "none";
                inicio();
        }
};

const inicio = () => {
        comprobarDecimoDigito();
};

const comprobarDecimoDigito = () => {
        bt.addEventListener("click", (e) => {
                e.preventDefault();
                let decimo = num_cuenta.value;
                if (
                        decimo === "" ||
                        decimo === undefined ||
                        decimo.length < 10
                ) {
                        error.style.display = "block";
                        error.textContent = "El tamaño debe tener 10 digitos";
                } else {
                        let suma = decimo
                                .split("")
                                .reduce(
                                        (total, acc) =>
                                                parseInt(total) + parseInt(acc)
                                );

                        if (suma % 9 === parseInt(decimo[9])) {
                                error.style.display = "none";
                                comprobarCuentaPhp();
                        } else {
                                console.log(suma);
                                error.style.display = "block";
                                error.textContent = "Numero de cuenta erroneo";
                        }
                }
        });
};

const comprobarCuentaPhp = async () => {
        const url = `http://localhost:8002/programa2/entrada.php?num_cuenta=${num_cuenta.value}`;
        try {
                const fet = await fetch(url);
                const res = await fet.json();
                console.log(res)
        } catch (e) {
                console.log(e);
        }
};
