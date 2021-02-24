const bt = document.querySelector(".bt");
const todo = document.querySelector(".todo");
const todo2 = document.querySelector(".todo2");

bt.addEventListener("click", () => {
        navigator.geolocation.getCurrentPosition(
                (po) => {
                        todo.textContent = `Latitud: ${po.coords.latitude}`;
                        todo2.textContent = `Longitud: ${po.coords.longitude}`;
                        var mimapa = L.map("mapa", {
                                center: [51.505, -0.09],
                                zoom: 13,
                        });
                        console.log(po);
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
