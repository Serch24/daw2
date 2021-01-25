window.addEventListener("load", () => {
        const canvas = document.querySelector(".canvas");
        const ctx = canvas.getContext("2d");

        canvas.height = window.innerHeight;
        canvas.width = window.innerWidth;

        /*Esto es para rellenar en la x=100, y=50 y el width y height*/
        /*ctx.fillRect(100,50,200,200)*/

        /*ctx.lineWidth = 5
   ctx.strokeStyle = "red"
   ctx.strokeRect(100,50,200,200)
   ctx.strokeStyle = "blue"
   ctx.strokeRect(150,100,200,200)*/

        /*ctx.moveTo(100,100)
   ctx.lineTo(200,100)
   ctx.lineTo(200,200)
   ctx.lineTo(100,200)
   ctx.closePath()     
   ctx.stroke()*/
        let pintar = false;

        function draw(e) {
                if (!pintar) {
                        return;
                }
                ctx.lineWidth = 30;
                ctx.lineCap = "round";
                ctx.strokeStyle = "blue";
                ctx.lineTo(e.clientX, e.clientY);
                console.log(e.clientX, e.clientY);
                ctx.stroke();
                ctx.beginPath();
                ctx.moveTo(e.clientX, e.clientY);
        }

        canvas.addEventListener("mousemove", draw);
        canvas.addEventListener("click", draw);

        canvas.addEventListener("mouseup", () => {
                pintar = false;
                ctx.beginPath();
        });

        canvas.addEventListener("mousedown", (e) => {
                pintar = true;
                draw(e);
        });
});
