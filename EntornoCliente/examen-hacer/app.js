class Tarifa {
        constructor(pais, precio_establecimiento, precio_minuto) {
                this.Pais = pais;
                this.Precio_establecimiento = precio_establecimiento;
                this.Precio_minuto = precio_minuto;
        }
}

class Llamada {
        constructor(pais, fecha, tel, tiempo) {
                this.Pais = pais;
                this.Fecha = fecha;
                this.Telefono = tel;
                this.Tiempo = tiempo;
        }
}

class Movil {
        constructor(marca, ancho, alto, tarifas, llamadas) {
                this.Marca = marca;
                this.Ancho = ancho;
                this.Alto = alto;
                this.Tarifas = tarifas;
                this.Llamadas = llamadas;
        }

        resolucion() {
                return this.Ancho * this.Alto;
        }

        importe_llamada(Llamada) {
                let importe;
                for (let i = 0; i < this.Tarifas.length; i++) {
                        if (Llamada.Pais === this.Tarifas[i].Pais) {
                                importe =
                                        this.Tarifas[i].Precio_establecimiento +
                                        this.Tarifas[i].Precio_minuto *
                                                (Llamada.tiempo / 60);
                        }
                }
                return importe;
        }

        llamada_mas_cara() {}

        pais_mas_llamado() {}

        ordenada() {}

        factura() {}
}

let cantidad = parseInt(prompt("Cuantas tarifas se desea introducir?"));
let arrayy_tarifa = [];
let paises = [];
let flag = false;
let flag2 = false;

for (let i = 0; i < cantidad; i++) {
        let pais;
        if (paises.length > 0) {
                while (!flag) {
                        pais = prompt("Nombre del pais");
                        for (let i = 0; i < paises.length; i++) {
                                if (pais === paises[i]) {
                                        flag2 = true;
                                }
                        }
                        if (flag2 === true) {
                                alert("Pais repetido");
                                flag2 = false;
                        } else {
                                flag = true;
                        }
                }
                flag = false;
                flag2 = false;
        } else {
                pais = prompt("nombre del pais");
        }
        paises.push(pais);
        let precio_esta = parseFloat(prompt("Precio del establecimiento"));
        let precio_min = parseFloat(prompt("Precio MInunto"));
        arrayy_tarifa.push(new Tarifa(pais, precio_esta, precio_min));
}

let mas_llamadas = true;
let pais_insertado = false;
let pais_tarifa;
let array_llamada = [];
let ano, mes, dia, hora, minutos, segundos;
let fecha_ok = false;
let fecha_sistema;
alert("Llamadas");
while (mas_llamadas) {
        while (pais_insertado === false) {
                pais_tarifa = prompt("Nombre pais de la llamada");
                for (let i = 0; i < arrayy_tarifa.length; i++) {
                        if (pais_tarifa == arrayy_tarifa[i].Pais) {
                                pais_insertado = true;
                        }
                }
        }
        pais_insertado = false;

        while (!fecha_ok) {
                ano = parseInt(prompt("Año"));
                while (!fecha_ok) {
                        mes = parseInt(prompt("Mes"));
                        if (mes >= 1 && mes <= 12) {
                                fecha_ok = true;
                        }
                }
                fecha_ok = false;

                while (!ok) {
                        dia = parseInt(prompt("Dia"));
                        if (dia >= 1 && dia <= 31) {
                                fecha_ok = true;
                        }
                }
                fecha_ok = false;

                while (!ok) {
                        hora = parseInt(prompt("Hora"));
                        if (hora >= 0 && hora <= 23) {
                                fecha_ok = true;
                        }
                }
                fecha_ok = false;

                while (!ok) {
                        minutos = parseInt(prompt("MInuntos"));
                        if (minutos >= 0 && minutos <= 23) {
                                fecha_ok = true;
                        }
                }
                fecha_ok = false;

                while (!ok) {
                        segundos = parseInt(prompt("Segundos"));
                        if (segundos >= 0 && segundos <= 59) {
                                fecha_ok = true;
                        }
                }
                fecha_ok = false;
                fecha_sistema = new Date(
                        ano,
                        mes,
                        dia,
                        hora,
                        minutos,
                        segundos
                );
                if (fecha_sistema.getTime() < new Date().getTime()) {
                        array_llamada.push(
                                new Llamada(
                                        pais_tarifa,
                                        fecha_sistema,
                                        1222,
                                        "tiempo"
                                )
                        );
                        fecha_ok = false;
                } else {
                        fecha_ok = true;
                        alert("Debes escribir todo de nuevo");
                }
        }
        mas_llamadas = confirm("Desea seguir?");
}
