<!DOCTYPE html>
<html>
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width" />
                <script src="app.js"></script>
                <title>Lista de movimiento</title>
        </head>
        <body>
                <form id="miform" action="#" method="post">
                        <label for="numCuenta">
                                Numero de cuenta:
                                <input
                                        type="text"
                                        name="numCuenta"
                                        id="numCuenta"
                                        placeholder="Numero de cuenta"
                                />
                        </label>
                        <label for="fechaPrimerMovimiento">
                                Fecha del primer movimiento: 
                                <input
                                        type="date"
                                        name="fechaPrimerMovimiento"
                                        id="fechaPrimerMovimiento"
                                />
                        </label>

                        <label for="fechaUltimoMovimiento">
                                Fecha del ultimo movimiento: 
                                <input
                                        type="date"
                                        name="fechaUltimoMovimiento"
                                        id="fechaUltimoMovimiento"
                                />
                        </label>
                        <button class="enviar">Enviar</button>
                </form>
                <h1 class="errorFecha">Hay un error al introducir las fechas!!</h1>
        </body>
</html>
