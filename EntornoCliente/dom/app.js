"use strict";

document.addEventListener("readystatechange", () => {
        if (document.readyState === "interactive") {
                const bt = document.querySelector("#bt");
                const bt2 = document.querySelector("#bt2");
                const bt3 = document.querySelector("#bt3");

                const primero = document.querySelector("#primero");
                const segundo = document.querySelector("#segundo");

                bt.addEventListener("click", () => {
                        primero.classList.remove("fondo-verde");
                        segundo.classList.remove("fondo-rojo");
                        primero.classList.add("fondo-rojo");
                        segundo.classList.add("fondo-verde");
                });

                bt2.addEventListener("click", () => {
                        primero.classList.remove("fondo-verde");
                        segundo.classList.remove("fondo-verde");
                        primero.classList.add("fondo-rojo");
                        segundo.classList.add("fondo-rojo");
                });
                bt3.addEventListener("click", () => {
                        primero.classList.remove("fondo-rojo");
                        segundo.classList.remove("fondo-rojo");
                        primero.classList.add("fondo-verde");
                        segundo.classList.add("fondo-verde");

                });
        }
});
