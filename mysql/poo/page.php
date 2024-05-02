<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete add</title>
</head>
<body>
    
    <h1> Agregar productos </h1>
    <form action="add.php" method="post">
        <label for="_articulo"> codigo articulo </label>
         <input type="text" id="c_articulo" name="c_articulo" required>
        <label for="seccion"> seccion </label>
         <input type="text" id="seccion" name="seccion" required>
        <label for="n_articulo"> numero de articulo </label>
         <input type="text" id="n_articulo" name="n_articulo" required>
        <label for="precio"> Precio </label>
         <input type="text" id="precio" name="precio" required>
        <label for="fecha"> fecha </label>
         <input type="text" id="fecha" name="fecha" required>
        <label for="importado"> importado </label>
         <input type="text" id="importado" name="importado" required>
        <label for="p_origen"> pais de origen </label>
         <input type="text" id="p_origen" name="p_origen" required>
        <button type="submit" name="eliminar"> ELIMINAR </button>
     </form>
    
    <h1> Eliminar un articulo </h1>
    <form action="delete.php" method="get">
      <label for="nombre">codigo articulo:</label>
       <input type="text" id="eliminar" name="eliminar" required>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>