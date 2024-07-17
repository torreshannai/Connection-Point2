
<?php
$nom="";
$paterno="";
$materno="";
$correo="";
$telefono="";
$opinion="";
$errores=0;
$longitud_nom="";
if(isset($_REQUEST["nom"],$_REQUEST["apPat"],$_REQUEST["apMat"],$_REQUEST["core"],$_REQUEST["tel"],$_REQUEST["opi"])){
    $nom=$_REQUEST["nom"];
    $paterno=$_REQUEST["apPat"];
    $materno=$_REQUEST["apMat"];
    $correo=$_REQUEST["core"];
    $telefono=$_REQUEST["tel"];
    $opinion=$_REQUEST["opi"];
    $longitud_nombre=strlen ($nom);

    
     echo "<h1>Tus datos han sido registrados
     <br>
     Gracias por compartir tus datos con nuestra empresa
     <br>
     Nuestro equipo se pondrá en conctacto contigo</h1>";

}

if($longitud_nom==0){
    $errores++;
    echo "<br> El nombre no puede estar vacio.";

}
if ($longitud_nom>10){
    $errores++;
    echo "<br> El nombre no puede superar los 10 caracteres.";

}


if ($errores==0){
    include("conexion.php");
    $conexion=conectar();
    $respuesta=mysqli_query($conexion, "INSERT INTO contactanos (Nombre, Apellido_paterno, Apellido_materno, Telefono, Correo, Opinion) 
    VALUES ('$nom', '$paterno', '$materno', '$telefono','$correo','$opinion')");
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
        <title>Registro de contacto</title>
    </head>

    <body>

    <br/>

    <button>
        <a href = "contacto.php" >Volver atrás</a>
    </button>

    </body>


</html>



