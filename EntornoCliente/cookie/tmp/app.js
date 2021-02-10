let cookie = "nombre=sergio;edad=20";

console.log(
        cookie
                .split(";")
                .forEach((v) => v.split("=").forEach((v) => console.log(v)))
);
