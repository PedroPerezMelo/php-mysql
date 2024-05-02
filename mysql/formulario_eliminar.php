<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eliminar registros</title>
    <link rel="stylesheet" href="styles_formulario.css">
</head>
<body>
    <h1> Registro de artículos</h1>
    <div id="formulario">
    <form name="form1" method="get" action="eliminar_registro.php">
        <table>
            <tr>
              <td>Codigo Articulo</td>
              <td><label for="c_art"></label>
              <input type="text" name="c_art" id="c_art"></td>
            </tr>
            
            <tr>
              <td>Seccion</td>
              <td><label for="seccion"></label>
              <input type="text" name="seccion" id="seccion"></td>
            </tr>
            
            <tr>
              <td>Nombre Articulo</td>
              <td><label for="n_art"></label>
              <input type="text" name="n_art" id="n_art"></td>
            </tr>
            
            <tr>
              <td>Precio</td>
              <td><label for="precio"></label>
              <input type="text" name="precio" id="precio"></td>
            </tr>
            
            <tr>
              <td>Fecha</td>
              <td><label for="fecha"></label>
              <input type="text" name="fecha" id="fecha"></td>
            </tr>
            
            <tr>
              <td>Importado</td>
              <td><label for="importado"></label>
              <input type="text" name="importado" id="importado"></td>
            </tr>
            
            <tr>
                <td>Pais de origen</td>
                <td><label for="p_orig"></label>
                <input type="text" name="p_orig" id="p_orig"></td>
              </tr>
              <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              </tr>
              <tr>
              <td><input type="submit" name="eliminar" id="eliminar" value="eliminar"></td>
              <td><input type="reset" name="borrar" id="borrar" value="borrar"></td>
              <td></td>
              </tr>
        </table>
    </form>
</div>
            
</body>
</html>