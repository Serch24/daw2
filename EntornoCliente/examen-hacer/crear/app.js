document.addEventListener("readystatechange", () => {
        if (document.readyState === "interactive") {
                /*const form = document.createElement("form");
                for (let i = 0; i < 2; i++) {
                        let a = document.createElement("input")
                        let div = document.createElement("div")
                        a.setAttribute("placeholder", "escribe algo")
                        a.appendChild(div)
                        form.append(a)
                }
                const boton = document.createElement("button");
                boton.textContent= "Enviar";
                boton.setAttribute("class", "bt")
                form.appendChild(boton)
                document.body.appendChild(form);

                const bot = document.querySelector('.bt');
                bot.addEventListener('click', (e) =>{
                        e.preventDefault();
                        console.log(document.body.children[2].children[0].firstElementChild.parentNode.remove())
                });*/
                setTimeout(() => {
                        const td = document.createElement("td");
                        td.textContent = "nope";
                        document.body.children[2].firstElementChild.children[0]
                                .appendChild(td)
                                .removeChild();
                        console.log("a");
                }, 1000);
        }
});
