const express = require("express");
const fetch = require("node-fetch");
const app = express();
const port = 4233;
const token = "369677a8935a36fdcbd5ea579079985d51863e0d";
const url = "https://github.com/login/oauth/authorize";
const url_post = `https://github.com/login/oauth/${token}`;

app.set("port", process.env.PORT || port);

app.get("/", (req, res) => {
        fetch(url_post, { method: "post", credentials: "same-origin" })
                .then((lol) => res.lol)
                .then((ee) => res.send(ee))
                .catch((ed) => console.log(ed));
});

/*app.get("/", (req, res) => {
        fetch(url, { credentials: "same-origin" })
                .then((resq) => resq.text())
                .then((q) => res.send(q))
                .catch((e) => console.log(e));
});*/
/*app.post("/session", (req, res, next) => {
        res.send("si");
        next();
});*/
const server = app.listen(app.get("port"), () => {
        console.log("puerto en ", app.get("port"));
});
