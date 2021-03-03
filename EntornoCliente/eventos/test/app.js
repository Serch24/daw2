const dato = document.querySelector(".ac");
const inp = document.querySelector("input[type=text]");

inp.addEventListener("input", () => {
        dato.textContent = `${inp.value}`;
});
