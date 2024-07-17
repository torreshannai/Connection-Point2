
<?php
$errores = 0;

    echo "<h1>Gracias por compartir tu opinión con nosotros</h1>";


$nin="" ;
if(isset($_REQUEST["p1"])){
    $nin=$_REQUEST ["p1"];
}

$peor="" ;
if(isset($_REQUEST["p2"])){
    $peor=$_REQUEST ["p2"];
}

$calidad="" ;
if(isset($_REQUEST["p3"])){
    $calidad=$_REQUEST ["p3"];
}

$mala="" ;
if(isset($_REQUEST["p4"])){
    $mala=$_REQUEST ["p4"];
}

$si="" ;
if(isset($_REQUEST["p5"])){
    $si=$_REQUEST ["p5"];
}


if ($errores==0){
    include("ConexionSatis.php");
    $conexion=conectar();
    $respuesta=mysqli_query($conexion, "INSERT INTO satisfa (Recomendacion, Comparacion, Aspecto_import, Experiencia, Expectativas) 
    VALUES ('$nin', '$peor', '$calidad', '$mala','$si')");
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
        <title>Registro Encuesta</title>
    </head>

    <body>

    <br/>
    <button>
        <a href = "Esatis.php" > Volver atrás </a>
    </button>

    </body>


</html>