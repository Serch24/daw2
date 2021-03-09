const bt = document.querySelector(".bt");
const crear_tabla = document.querySelector(".crear_tabla");
const table = document.querySelector(".table");
const dbname = document.querySelector(".dbname");
const ok = document.querySelector(".ok");

bt.addEventListener("click", (e) => {
        e.preventDefault();
        if (table.value && dbname.value) {
                ok.textContent = "";
                consulta({
                        valor_table: `${table.value}`,
                        valor_db: `${dbname.value}`,
                });
        } else {
                ok.textContent = `Hay campos en blanco`;
        }
});

crear_tabla.addEventListener("click", ()=>{
        console.log("aaaaaaaaaaa")
})

const consulta = async (datos) => {
        const url = `http://localhost:8001/llamar.php?enviar=1&datos=${JSON.stringify(datos)}`;
        try {
                const fet = await fetch(url);
                const res = await fet.text();
                console.log(res)
                /*ok.textContent = res.mensaje;
                setTimeout(() => {
                        ok.textContent = "";
                }, 3000);*/
        } catch (e) {
                console.log("Algo pasó");
        }
};
