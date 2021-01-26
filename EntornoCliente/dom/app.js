document.addEventListener("readystatechange", () => {
        console.log(document.readyState);
        if (document.readyState === "interactive") {
                console.log("sip");
                const primero = document.querySelector("#primero");
                const segundo = document.querySelector("#segundo");
                console.log(primero);
                console.log(segundo);
                /*console.log(document.readyState);*/
        }
});
