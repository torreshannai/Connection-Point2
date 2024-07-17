<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" conent="infrared, infraestructura, clínica, uttec">
        <meta name="description" content="Preoyecto integrador de infraestructura de redes, equipo 4">
        <meta name="author" content="Tavera, José, José, Saucedo">
        <meta http-equiv="refresh" content="3600">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilocrud.css"/>
        <title>Actualizar Contacto</title>

    </head>

<body>
    <?php
        include("conexion.php");
        $conexion =conectar();
        if(isset($_GET["idE"])){
            $query =mysqli_query($conexion, "Select * from contactanos where id_persona =".$_GET["idE"]);
            while($valores =mysqli_fetch_array($query)){

                echo "<form action='ActualizarContacto.php' method='POST'>
                <input type ='hidden' name ='id' value ='".$valores['id_persona']."'>

                <ul>
                <li>
                <label for='nom'>Nombre(s)</label>
                <input type='text' id='nom' name='nom' value='".$valores['Nombre']."' required>
                </li>
                <li>
                <label for='apPat'>Apellido paterno</label>
                <input type='text' id='apPat' name='apPat' value='".$valores['Apellido_paterno']."' required>
                </li>
                <li>
                <label for='apMat'>Apellido materno</label>
                <input type='text' id='apMat' name='apMat' value='".$valores['Apellido_materno']."' required>
                </li>
                <li>
                <label for='core'>Correo electrónico</label>
                <input type='email' id='core' name='core' value='".$valores['Correo']."' required>
                </li>   
                <li>
                <label for='tel'>Teléfono</label>
                <input type='tel' id='tel' name='tel' minlength='10' maxlength='10' value='".$valores['Telefono']."' required>
                </li>
                <br>
                <button type ='submit' name ='btn_form'>Actualizar</button>
                </form>
                
                <button>
                <a href = 'ConsultaContacto.php' >Cancelar</a>
                </button>";

            }
        }

        if(isset($_POST["nom"],$_POST["apPat"],$_POST["apMat"],$_POST["core"],$_POST["tel"])){
            $respuesta =mysqli_query($conexion, "UPDATE contactanos set
            Nombre ='".$_POST["nom"]."',
            Apellido_paterno ='".$_POST["apPat"]."',
            Apellido_materno ='".$_POST["apMat"]."',
            Correo ='".$_POST["core"]."',
            Telefono ='".$_POST["tel"]."'
            where id_persona =".$_POST["id"].";");

            if($respuesta==1){
                echo "<br><h1>Registro actualizado</h1>
                <br>
                <button>
                <a href ='ConsultaContacto.php'>Regresar</a>
                </button>";
            }
        }

        ?>
</body>

</html>