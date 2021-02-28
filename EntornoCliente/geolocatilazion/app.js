const bt = document.querySelector(".bt");
const url = "https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png";

bt.addEventListener("click", () => {
        navigator.geolocation.getCurrentPosition(
                (po) => {
                        console.log(po);
                        let latitud = po.coords.latitude;
                        let longitud = po.coords.longitude;
                        mostrat(latitud,longitud);
                },
                (e) => {
                        todo.textContent = "No se permitió la posición";
                        console.log(e);
                },
                {
                        enableHighAccuracy: true,
                        maximumAge: 30000,
                        timeout: 27000,
                }
        );
});
const mostrat = (lat,lon) => {
let mymap = L.map("map").setView(
                                [lat, lon],
                                13
                        );
                        L.tileLayer(url, {
                                maxZoom: 18,
                        }).addTo(mymap);

                        let marcador = L.marker([lat, lon]).addTo(mymap);
}

