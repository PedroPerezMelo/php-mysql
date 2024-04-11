<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/condicionales.css">
</head>
<body>

<div class="formulario">
<h1> usando condicionales </h1>

<form action="validacion_condicionales.php" method="post" name="datos_usuario" id="datos_usuario">
    <table width="15%" align-items="center" >
      <tr>
        <td>Nombre:</td>
        <td><label for="nombre_usuario"></label>
        <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
      </tr>
      <tr>
        <td>contraseña:</td>
        <td><label for="edad_usuario"></label>
        <input type="text" name="contra" id="contra"></td>
        </tr>
        <tr>
            <td>&nbsp</td>
            <td>&nbsp</td>
        </tr>
        <tr>
            <td class="enviar_datos"colspan="2" align-items="center"><input type="submit" name="enviando" id="enviando" value="enviar"></td>  
        </tr>  
        </table>
</form>
</div>
    
</body>
</html>