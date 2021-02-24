const grabar = document.querySelector(".grabar");
const leer = document.querySelector(".leer");
const todo = document.querySelector(".todo");
const borrar = document.querySelector(".borrar");
const borrar_todo = document.querySelector(".borrar_todo");

grabar.addEventListener("click", () => {
        const nombre_grabar = prompt("Dame el nombre 😃 ");
        const valor_grabar = prompt("Dame el valor 😃 ");
        if (
                nombre_grabar === "" ||
                valor_grabar === "" ||
                nombre_grabar === undefined ||
                valor_grabar === undefined
        ) {
                alert("Hay un campo en blanco, no se puede grabar la cookie");
        } else {
                localStorage.setItem(nombre_grabar, valor_grabar);
                alert("Cookie grabada");
        }
        mostrar.textContent = "";
});

borrar.addEventListener("click", () => {
        const nombre_borrar = prompt(
                "Dame el nombre de la cookie a borrar 😞 "
        );
        if (nombre_borrar === "" || nombre_borrar === undefined) {
                alert("Hay un campo en blanco, no se puede borrar la cookie");
        } else {
                if ((tmp = localStorage.getItem(nombre_borrar))) {
                        const sure = confirm(
                                `Esta seguro de borrar la cookie ${tmp} 😞  ?`
                        );
                        if (sure) {
                                alert(`Cookie ${tmp} borrada`);
                                localStorage.removeItem(nombre_borrar);
                        } else {
                                alert("Bien pensado 😃 , cookie no borrada!");
                        }
                } else {
                        alert("Cookie no encontrada");
                }
        }
        mostrar.textContent = "";
});

leer.addEventListener("click", () => {
        const nombre_leer = prompt("Dame el nombre de la cookie a buscar 😃 ");
        if (nombre_leer === "" || nombre_leer === undefined) {
                alert("Hay un campo en blanco, no se puede grabar la cookie");
        } else {
                if ((tmp = localStorage.getItem(nombre_leer))) {
                        if (tmp) {
                                alert(`La cookie es ${tmp} 😃 `);
                        }
                } else {
                        alert("No se encontró esa cookie 😛 ");
                }
        }
        mostrar.textContent = "";
});

todo.addEventListener("click", () => {
        let valor = localStorage.length;
        if (valor > 0) {
                console.log(valor);
                for (let i = 0; i < valor; i++) {
                        if (localStorage.key(i)) {
                                alert(
                                        `${localStorage.key(
                                                i
                                        )}: ${localStorage.getItem(
                                                localStorage.key(i)
                                        )}. `
                                );
                        }
                }
        } else {
                alert("No hay cookies grabadas 😞 ");
        }
});

borrar_todo.addEventListener("click", () => {
        if (localStorage.length === 0) {
                alert("No hay nada que borrar 😃 ");
        } else {
                localStorage.clear();
                alert("Todo se ha borrado 😛 ");
        }
});
