const bt = document.querySelector(".bt");
const dbname = document.querySelector(".dbname");
const mos_tabla = document.querySelector(".mos_tabla");
const query = document.querySelector("#query");
const ok = document.querySelector(".ok");
const ck = document.querySelector(".creardb");
const ck2 = document.querySelector(".tabla");
const ck3 = document.querySelector(".actualizar");
const ck4 = document.querySelector(".eliminar");
const ck5 = document.querySelector(".ver");
const nombre_db = document.querySelector(".nombre_db");

nombre_db.style.display = "none";
query.style.display = "none";
dbname.style.display = "none";
bt.style.display = "block";

ck.addEventListener("click", (e) => {
        if (e.target.checked === true) {
                dbname.style.display = "block";
        } else {
                dbname.style.display = "none";
        }
});

ck2.addEventListener("click", (e) => {
        if (e.target.checked === true) {
                query.style.display = "block";
                nombre_db.style.display = "block";
        } else {
                query.style.display = "none";
                nombre_db.style.display = "none";
        }
});

ck3.addEventListener("click", (e) => {
        if (e.target.checked === true) {
                query.style.display = "block";
                nombre_db.style.display = "block";
        } else {
                query.style.display = "none";
                nombre_db.style.display = "none";
        }
});

ck4.addEventListener("click", (e) => {
        if (e.target.checked === true) {
                query.style.display = "block";
                nombre_db.style.display = "block";
        } else {
                query.style.display = "none";
                nombre_db.style.display = "none";
        }
});

ck5.addEventListener("click", (e) => {
        if (e.target.checked === true) {
                query.style.display = "block";
                nombre_db.style.display = "block";
        } else {
                query.style.display = "none";
                nombre_db.style.display = "none";
        }
});

bt.addEventListener("click", (e) => {
        e.preventDefault();
        if (query.value != "" || dbname.value != "") {
                ok.textContent = "";
                if (ck.checked === true) {
                        consulta({
                                dato: "creardb",
                                info: dbname.value,
                        });
                }
                if (ck2.checked === true) {
                        let obj = {
                                dato: "tabla",
                                info: {
                                        query: query.value,
                                        nombredb: nombre_db.value,
                                },
                        };
                        consulta2(JSON.stringify(obj));
                }
                if (ck3.checked === true) {
                        let obj = {
                                dato: "actualizar",
                                info: {
                                        query: query.value,
                                        nombredb: nombre_db.value,
                                },
                        };
                        consulta3(JSON.stringify(obj));
                }
                if (ck4.checked === true) {
                        let obj = {
                                dato: "eliminar",
                                info: {
                                        query: query.value,
                                        nombredb: nombre_db.value,
                                },
                        };
                        consulta4(JSON.stringify(obj));
                }
                if (ck5.checked === true) {
                        let obj = {
                                dato: "ver",
                                info: {
                                        query: query.value,
                                        nombredb: nombre_db.value,
                                },
                        };
                        consulta5(JSON.stringify(obj));
                }
        } else {
                ok.textContent = `Hay campos en blanco`;
        }
});

const consulta = async ({ dato, info }) => {
        const url = `http://localhost:8001/llamar.php?enviar=1&${dato}=${info}`;
        try {
                const fet = await fetch(url);
                const res = await fet.text();
                console.log(res);
                ok.textContent = res.mensaje;
                setTimeout(() => {
                        ok.textContent = "";
                }, 3000);
        } catch (e) {
                console.log("Algo pasó", e);
        }
};

const consulta2 = async (datos) => {
        const url = `http://localhost:8001/llamar.php?enviar=1&x=${datos}`;
        try {
                const fet = await fetch(url);
                const res = await fet.json();
                console.log(res);
                ok.textContent = res.mensaje;
                setTimeout(() => {
                        ok.textContent = "";
                }, 3000);
        } catch (e) {
                console.log("Algo pasó", e);
        }
};

const consulta3 = async (datos) => {
        const url = `http://localhost:8001/llamar.php?enviar=1&actualizar=${datos}`;
        try {
                const fet = await fetch(url);
                const res = await fet.json();
                console.log(res);
                ok.textContent = res.mensaje;
                setTimeout(() => {
                        ok.textContent = "";
                }, 3000);
        } catch (e) {
                console.log("Algo pasó", e);
        }
};

const consulta4 = async (datos) => {
        const url = `http://localhost:8001/llamar.php?enviar=1&eliminar=${datos}`;
        try {
                const fet = await fetch(url);
                const res = await fet.json();
                console.log(res);
                ok.textContent = res.mensaje;
                setTimeout(() => {
                        ok.textContent = "";
                }, 3000);
        } catch (e) {
                console.log("Algo pasó", e);
        }
};

const consulta5 = async (datos) => {
        const url = `http://localhost:8001/llamar.php?enviar=1&ver=${datos}`;
        try {
                const fet = await fetch(url);
                const res = await fet.json();
                console.log(res);
                /*crearTabla(res);*/
                setTimeout(() => {
                        ok.textContent = "";
                }, 3000);
        } catch (e) {
                console.log("Algo pasó", e);
        }
};

/*const crearTabla = (arr) => {
        ok.style.display = "block";
        mos_tabla.innerHTML = "<table><tr>";
        arr.forEach((v) => {
                [>mos_tabla.innerHTML += `${v.idvacuna} `;<]
        });
        mos_tabla.innerHTML += "</tr></table>";
};*/
