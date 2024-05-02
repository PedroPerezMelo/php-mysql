<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // habilitar errores
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    try {

    $login = $_POST["login"];
    $contraseña = $_POST["contraseña"];

    $conexion = new PDO("mysql:host=localhost;dbname=systemlogin", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM usuarios WHERE USUARIOS = :usuario AND PASSWORDS = :pass";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":usuario", $login);
    $stmt->bindParam(":pass", $contraseña);
    $stmt->execute();

    $num_registro = $stmt->rowCount();

    if ($num_registro != 0){

        session_start();

        $_SESSION["usuario"] = $_POST["login"];

        //guardar cookie
        $valorCheckbox = isset($_POST["recordar"]) ? $_POST["recordar"] : "";

        if ($valorCheckbox === "on") {
            setcookie("datos", $_SESSION["usuario"], time() + 3600); // Reemplaza "TusDatos" con el valor deseado de la cookie
        } else {
            // Destruir la cookie si no se marca la casilla
            setcookie("datos", "", time() - 1); // Expira la cookie en el pasado
        }

        header("location:usuarios.php");

    } else {

        header("location:login.php");

        echo "usuario no encontrado: " . $login;
    }

    } catch (PDOException $e) {
        
        die ("error al validar el usuario: " . $e->getMessage());

    } finally {

    }
    ?>
    
</body>
</html>