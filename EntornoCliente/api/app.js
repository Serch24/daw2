const fetch = require("node-fetch");

const token =
        "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImQ1Zjg4ODQ2LTYyY2YtNDI1NS1hNGViLTEyMDg3ZDU0MWM0MyIsImlhdCI6MTYxMjcxNTM0OCwic3ViIjoiZGV2ZWxvcGVyL2YzNTg4NmIxLWI5ZmMtY2Y2Yy05YzU0LTQ2NTQzMTMxZjQ2ZSIsInNjb3BlcyI6WyJicmF3bHN0YXJzIl0sImxpbWl0cyI6W3sidGllciI6ImRldmVsb3Blci9zaWx2ZXIiLCJ0eXBlIjoidGhyb3R0bGluZyJ9LHsiY2lkcnMiOlsiMTk1LjEzNS4yNDguODgiXSwidHlwZSI6ImNsaWVudCJ9XX0.tFwWNkzIcgirodfkKhKVDM_rhmVf6hlV2cvRW-IrWm5MT7DI39BEhJGqoj-nF3kaY4dTC91CV3C0EXYhGBR84Q";

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
                console.log(data);
                /*const poke = {
                        imagen: data.sprites.other.dream_world.front_default,
                        nombre: data.name,
                };
                console.log(poke);*/
        } catch (e) {
                console.log(e);
        }
};
fetchData();
