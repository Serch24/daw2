const bt = document.querySelector(".bt");
const tbody = document.querySelector("tbody");

const ar = [
        ["2021-03-04", "Ingreso en efectivo", 100, 100],
        ["2021-04-05", "retiro del banco", 50, 50],
        ["2021-05-06", "Ingreso del bitcoin", 1000, 1050],
        ["2021-07-08", "retiro del banco", 500, 550],
];

bt.addEventListener("click", () => {
        for (let i = 0; i < ar.length; i++) {
                tbody.appendChild(document.createElement("tr"));
                for (let j = 0; j < ar[i].length; j++) {
                        tbody.lastElementChild.innerHTML += `<td>${ar[i][j]}</td>`;
                }
        }
});
