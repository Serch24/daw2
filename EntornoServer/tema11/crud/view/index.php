                <form action="../controller/modificar.php" method="GET">
                        <div class="campos">
                                <input type="number" name="id" placeholder="id">
                                <input type="text" name="nombre" placeholder="nombre">
                                <input type="number" name="start" placeholder="numero start powers"> 
                                <input type="number" name="skins" placeholder="numero skins">
                        </div>
                  <br>
                  <br>
                        <div class="bts">
                                <input type="submit" class="sub" name="actualizar" value="actualizar">
                                <input type="submit" class="sub" name="borrar" value="borrar">
                                <input type="submit" class="sub" name="insertar" value="insertar">
                        </div>
                </form>



         <ul>
                 <li>
                         <p>Para actualizar un brawler se necesita el Id respectivo y los datos a cambiar</p>
                 </li>
                 <li>
                         <p>Para eliminar un brawler se necesita el Id y el nombre, los otros parametros son opcionales</p>
                 </li>
                 <li>
                         <p>Para insertar un brawler se necesitan todos los parametros , el Id es opcional</p>
                 </li>
         </ul>

</body>
</html>
