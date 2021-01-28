const url = "http://localhost:8001";
const main = document.querySelector(".main");
const bt = document.querySelector(".bt");

bt.addEventListener("click", () => {
        fetch(url)
                .then((respuesta) => {
                        /*console.log(res.text());*/
                        return respuesta.json();
                })
                .then((data) => {
                        console.log(data);
                        main.textContent = data[0].description;
                })
                .catch((err) => {
                        console.log(err);
                });
});
