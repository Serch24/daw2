const princesa = [];
let mario = [];
let wall = [];
/*const new_grid = [
        ["-", "-", "-", "-"],
        ["p", "-", "m", "-"],
        ["-", "-", "-", "-"],
        ["-", "-", "-", "-"],
];*/

function crear_grid(size = 3, m = [1, 1], p = [0, 0]) {
        let gridd = [];
        for (let i = 0; i < size; i++) {
                gridd[i] = [];
                for (let j = 0; j < size; j++) {
                        gridd[i][j] = "-";
                }
        }
        gridd[m[0]][m[1]] = "m";
        gridd[p[0]][p[1]] = "p";
        return gridd;
}

const timer = (ms) => new Promise((res) => setTimeout(res, ms));
async function princess(arr) {
        let copia = arr;
        /*Se le saca la mitad para saber por donde se empieza a buscar a la princesa, en este caso siempre será en la mitad si es un numero impar*/
        for (let i = 0; i < arr.length; i++) {
                for (let j = 0; j < arr[i].length; j++) {
                        if ("p" == arr[i][j]) {
                                princesa.push(i);
                                princesa.push(j);
                        }
                        if ("m" == arr[i][j]) {
                                mario.push(i);
                                mario.push(j);
                        }
                        if ("w" == arr[i][j]) {
                                wall.push(i);
                                wall.push(j);
                        }
                }
        }

        console.clear();
        console.log(copia);
        /*mario[0] != princesa[0] ||*/
        while (mario[1] != princesa[1] || mario[0] != princesa[0]) {
                await timer(1000);
                /*Si estan en el eje Y los dos solo se moverá mario en el eje X */
                if (
                        (princesa[0] === mario[0] && princesa[1] > mario[1]) ||
                        (mario[0] < princesa[0] && mario[1] < princesa[1])
                ) {
                        /*console.log("derecha");*/
                        copia[mario[0]][mario[1]] = "-";
                        mario[1] = mario[1] + 1;
                        if (
                                mario[0] === princesa[0] &&
                                princesa[1] === mario[1]
                        ) {
                                copia[mario[0]][mario[1]] = "mp";
                        } else {
                                copia[mario[0]][mario[1]] = "m";
                        }
                        console.clear();
                        console.log(copia);
                }

                if (
                        (mario[0] === princesa[0] && mario[1] > princesa[1]) ||
                        (mario[0] < princesa[0] && mario[1] > princesa[1]) ||
                        (mario[0] > princesa[0] && mario[1] > princesa[1])
                ) {
                        /*console.log("izquierda");*/
                        copia[mario[0]][mario[1]] = "-";
                        mario[1] = mario[1] - 1;
                        if (
                                mario[0] === princesa[0] &&
                                princesa[1] === mario[1]
                        ) {
                                copia[mario[0]][mario[1]] = "mp";
                        } else {
                                copia[mario[0]][mario[1]] = "m";
                        }
                        console.clear();
                        console.log(copia);
                }
                /*Se prodran mover desde arriba hacia abajo y viceversa solo si estan en Y iguales*/
                if (
                        (mario[1] === princesa[1] && mario[0] > princesa[0]) ||
                        (mario[0] > princesa[0] && princesa[1] > mario[1])
                ) {
                        /*console.log("arriba");*/
                        copia[mario[0]][mario[1]] = "-";
                        mario[0] = mario[0] - 1;
                        if (
                                mario[0] === princesa[0] &&
                                princesa[1] === mario[1]
                        ) {
                                copia[mario[0]][mario[1]] = "mp";
                        } else {
                                /*console.log(mario);*/
                                copia[mario[0]][mario[1]] = "m";
                        }
                        console.clear();
                        console.log(copia);
                }

                if (mario[1] === princesa[1] && mario[0] < princesa[0]) {
                        /*console.log("abajo");*/
                        copia[mario[0]][mario[1]] = "-";
                        mario[0] = mario[0] + 1;
                        if (
                                mario[0] === princesa[0] &&
                                princesa[1] === mario[1]
                        ) {
                                copia[mario[0]][mario[1]] = "mp";
                        } else {
                                copia[mario[0]][mario[1]] = "m";
                        }
                        console.clear();
                        console.log(copia);
                }
        }
}
princess(crear_grid(11, [6, 10], [0, 1]));
