let arr = [];
const new_array = document.querySelector(".new");

const random = (min = 0, max = 50) => {
        let num
        for (let i = 0; i < 300; i++) {
                num = Math.floor(Math.random() * (max - min) + min);
        }
        return num;
};
/*arr = random(10, 700);*/
console.log(arr.length);

const container = document.querySelector(".container");

/*arr.forEach((v) => {
        container.innerHTML += `<div class='numeros' style='height:${v}px'> </div>`;
});*/

new_array.addEventListener("click", () => {
        let nue_ar = [];
        /*arr = null;*/
        for (let i = 0; i < 300; i++) {
                nue_ar.push(random(10, 500));
        }
        container.remove();
        let node = document.createElement("div")
        node.classList.add("container")
        document.body.appendChild(node)
        let container2 = document.querySelector(".container");
        nue_ar.forEach((v) => {
                container2.innerHTML += `<div class='numeros' style='height:${v}px'> </div>`;
        });
});
