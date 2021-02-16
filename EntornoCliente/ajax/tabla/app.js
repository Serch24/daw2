let a;
const h = document.querySelector(".h");
const bt = document.querySelector(".bt");
const texto = document.querySelector(".texto");
const nombre = document.querySelector("#nombre");
const nombre2 = document.querySelector("#nombre2");

/*fetch("http://localhost:4323/index.php?valor=sergio")
        .then((res) => res.text())
        .then((v) => {
                console.log(v);
                a = v;
        })
        .catch((err) => console.log("Hubo un error", err));
*/

/*const fe = async () => {
        try {
                const res = await fetch(
                        "http://localhost:3033/index.php?valor=sergio"
                );
                a = await res.text();
        } catch (e) {
                console.log("algo pasó");
        }
};
fe();*/

//GET
bt.addEventListener("click", () => {
        let test = new XMLHttpRequest();
        let elobjeto = {
                nombre: nombre.value,
                apellido: nombre2.value,
        };
        test.open(
                "GET",
                `http://localhost:3033?test=${JSON.stringify(elobjeto)}`,
                true
        );
        test.onreadystatechange = () => {
                if (test.readyState == 4) {
                        if (test.status == 200) {
                                texto.textContent = test.responseText;
                        } else {
                                console.log("hubo un error");
                        }
                }
        };
        test.setRequestHeader(
                "Content-type",
                "application/x-www-form-urlencoded"
        );
        test.send();
});

//POST
/*bt.addEventListener("click", () => {
        const miform = new FormData();
        miform.append("nombre", nombre.value);
        miform.append("apellido", nombre2.value);

        let test = new XMLHttpRequest();
        test.open("POST", `http://localhost:3033/index.php`, true);
        test.onreadystatechange = () => {
                if (test.readyState == 4) {
                        if (test.status == 200) {
                                [>texto.textContent = JSON.parse(
                                        test.responseText
                                );<]
                                console.log(JSON.parse(test.responseText));
                        } else {
                                console.log("hubo un error");
                        }
                }
        };
        [>test.responseType = "json";<]
        test.send(miform);
});*/
