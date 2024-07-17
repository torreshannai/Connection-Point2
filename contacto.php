
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" conent="infrared, infraestructura, clínica, uttec">
        <meta name="description" content="Preoyecto integrador de infraestructura de redes, equipo 4">
        <meta name="author" content="Tavera, José, José, Saucedo">
        <meta http-equiv="refresh" content="3600">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <title>Página de contacto</title>
        <link rel="stylesheet" href="../css/style1.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>

<body>
<div class="wrapper">
    
    <form action="regcontacto.php" method="REQUEST">
        <ul>
            <li>
        <div class="input-box">
        <h2>Ingresa tus datos para que nuestro equipo se ponga en contacto contigo</h2>
        </div>    
            </li>
        <br>
            <li>
        <div class="input-box">
        <label for="nom">Nombre(s)</label>
        <input type="text" id="nom" name="nom" value="" required maxlength="30" pattern ="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se aceptan letras">
        </div>
            </li>
            <li>
        <div class="input-box">
        <label for="apPat">Apellido paterno</label>
        <input type="text" id="apPat" name="apPat" value="" required maxlength="30" pattern ="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se aceptan letras">
        </div>        
            </li>
            <li>
        <div class="input-box">
        <label for="apMat">Apellido materno</label>
        <input type="text" id="apMat" name="apMat" value="" required maxlength="30" pattern ="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se aceptan letras">
        </div>        
            </li>
            <li>
        <div class="input-box">
        <label for="core">Correo electrónico</label>
        <input type="email" id="core" name="core" value="" required maxlength="30">
        </div>        
            </li>
            <li>
        <div class="input-box">
        <label for="tel">Teléfono</label>
        <input type="tel" id="tel" name="tel" value="" required minlength="10" maxlength="10" pattern="[0-9]+" title="Solo se aceptan números">
        </div>        
            </li>
            <li>
        <div class="input-box">
        <label for="opi">Dános tu opinión</label>
        
        <input type="text" id="opi" name="opi" value="" required maxlength="200" pattern ="[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+" title="Solo se aceptan letras">
        </div>        
            </li>

        <br>
            <li>
        <button type="submit">Enviar</button>
            </li>
        </ul>
    </form>

    <br/>

    <button>
        <a href = "../index.php" > Volver atrás </a>
    </button>
    </div>
        
</body>

</html>