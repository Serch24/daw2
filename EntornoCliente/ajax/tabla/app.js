let a;
const h = document.querySelector(".h");
const bt = document.querySelector(".bt");

/*fetch("http://localhost:4323/index.php?valor=sergio")
        .then((res) => res.text())
        .then((v) => {
                console.log(v);
                a = v;
        })
        .catch((err) => console.log("Hubo un error", err));
*/

const fe = async () => {
        try {
                const res = await fetch(
                        "http://localhost:4323/index.php?valor=sergio"
                );
                a = await res.text();
        } catch (e) {
                console.log("algo pasó");
        }
};
fe();

bt.addEventListener("click", () => {
        h.innerHTML = a;
});
