const fetch = require("node-fetch");
const express = require("express");
const app = express();
let info;

const token =
        "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6IjQ4OGZiNGU2LWRiZjctNDM1ZC1hYzE5LWE1YjAyZTJlZTliZiIsImlhdCI6MTYxMjc3NDcyMiwic3ViIjoiZGV2ZWxvcGVyL2YzNTg4NmIxLWI5ZmMtY2Y2Yy05YzU0LTQ2NTQzMTMxZjQ2ZSIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiODAuMjkuMTg4LjE5OCJdLCJ0eXBlIjoiY2xpZW50In1dfQ.obOhnPwtSynPrpt_CX3c6N968FDk2Uy23SFhV_6SqZxxqpxc8fXpWPE-pz0-HA5jtN8diOjdxLtjUnbTB73MFQ";

const miid = "https://api.brawlstars.com/v1/players/%2398Q9YJ8C2/";
const fetchData = async () => {
        try {
                const res = await fetch(miid, {
                        headers: {
                                "Content-Type": "application/json",
                                Authorization: `Bearer ${token}`,
                        },
                });
                /*Con json convierte la api*/
                const data = await res.json();
                /*console.log(data);*/
                info = data;
        } catch (e) {
                console.log(e);
        }
};
fetchData();

app.get("/", (req, res) => {
        console.log(info.brawlers[0].starPowers);
        res.send("Hola");
});
app.listen(8035, () => {
        console.log("escuchando...");
});
