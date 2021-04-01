<!DOCTYPE html>
<html lang="es">
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width" />
                <script src="app.js"></script>
                <title>Apertura de cuentas</title>
        </head>
        <body>
                <form action="#" method="POST" >
                        <label for="numero_cuenta">Numero de cuenta:
                                <input type="text" name="numero_cuenta" id="numero_cuenta" placeholder="numero de cuenta" maxlength="10">
                        </label>

                        <label for="numero_dni">Dni del primer titular:
                                <input type="text" name="numero_cuenta1" id="numero_dni" placeholder="DNI" maxlength="9">
                        </label>

                        <label for="numero_dni">Dni del segundo titular:
                                <input type="text" name="numero_cuenta2" id="numero_dni" placeholder="DNI" maxlength="9">
                        </label>
                        <button class="enviar">Enviar</button>
                </form>
               <h2 class="error"></h2>
        </body>
</html>
