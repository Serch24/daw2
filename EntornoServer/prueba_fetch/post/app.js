const url = "http://localhost:8001/";
let info = {
        nombre: "sergio",
        apellido: "Yaccelga",
};
let misHeaders = new Headers();
misHeaders.append("Accept", "application/json");
/*misHeaders.append("Content-Type", "application/json; charser=UTF-8");*/
misHeaders.append("Content-Type", "application/json");

fetch(url, {
        headers: misHeaders,
        method: "POST",
        body: JSON.stringify(info),
})
        .then((res) => {
                /*return res.json();*/
                console.log(res)
        })
        .catch((err) => console.log("error: ", err))
        .then((re) => console.log(re));
