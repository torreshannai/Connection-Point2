<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" conent="infrared, infraestructura, clínica, uttec">
        <meta name="description" content="Preoyecto integrador de infraestructura de redes, equipo 4">
        <meta name="author" content="Tavera, José, José, Saucedo">
        <meta http-equiv="refresh" content="3600">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilosform.css"/>
        <title>Cosulta de Fromulario</title>

    </head>

<body> 
    <table>
        <tr>
            <th colspan="8">Información de Contacto</th>
        </tr>
        <tr>
            <td>Nombre(s)</td>
            <td>Apellido paterno</td>
            <td>Apellido materno</td>
            <td>Teléfono</td>
            <td>Correo</td>
            <td>Dános tu opinión</td>
            <td>Eliminar</td>
            <td>Actualizar</td>
        </tr>

    <?php
        include("conexion.php");
        $conexion=conectar();
        $query = mysqli_query($conexion, "Select * from contactanos");
        while($valores = mysqli_fetch_array($query)){
            echo "<tr><td>".$valores['Nombre']."</td>
            <td>".$valores['Apellido_paterno']."</td>
            <td>".$valores['Apellido_materno']."</td>
            <td>".$valores['Telefono']."</td>
            <td>".$valores['Correo']."</td>
            <td>".$valores['Opinion']."</td>
            <td><a href ='BorrarContacto.php?idE=
            ".$valores['id_persona']."&nom=
            ".$valores['Nombre']."'><button>Eliminar</button></a>
            </td>
            <td><a href ='ActualizarContacto.php?idE=
            ".$valores['id_persona']."'><button>Actualizar</button></a>
            </td>
            <tr>";
        }



    ?>

    </table>

</body>

<html>