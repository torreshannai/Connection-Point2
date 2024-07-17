<?php
if(isset($_GET["idE"],$_GET["nom"])){
    $idEliminar=$_GET["idE"];
    $nombre=$_GET["nom"];
    echo "<form action ='BorrarContacto.php'
    method='post'>
    <h1>Seguro que deseas eliminar a ".$nombre."</h1>";
    echo "<br><button type='submit' name ='btnSi'
    value='".$idEliminar."'>Si</button>
    </form>
    <a href ='ConsultaContacto.php'><button>No</button>
    </a>";
}

if(isset($_POST["btnSi"])){
    /*Eliminar datos en MySQL*/
    include("conexion.php");
    $conexion= conectar();
    $respuesta= mysqli_query($conexion,
    "Delete from contactanos where id_persona= ".$_POST["btnSi"]);
    echo "<h1>Se ha eliminado con exito</h1>
    <button>
    <a href= 'ConsultaContacto.php'>Regresar</a>
    </button>";
}



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" conent="infrared, infraestructura, clínica, uttec">
        <meta name="description" content="Preoyecto integrador de infraestructura de redes, equipo 4">
        <meta name="author" content="Tavera, José, José, Saucedo">
        <meta http-equiv="refresh" content="3600">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/estiloregistros.css">
        <title>Eliminar registro</title>
    </head>

    <body>



</html>