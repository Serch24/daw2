const express = require("express");
const app = express();
const port = process.env.PORT || 3000;

app.set("views", `${__dirname}/views`);
app.set("view engine", "hbs");

app.get("/", (req, res) => {
        const datos = {
                nombre: "sergio",
                apellido: "Yaccelga",
        };
        res.render("index", datos);
});

app.listen(port, () => {
        console.log(`Puerto en ${port}`);
});
