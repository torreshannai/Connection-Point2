<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" conent="infrared, infraestructura, clínica, uttec">
        <meta name="description" content="Preoyecto integrador de infraestructura de redes, equipo 4">
        <meta name="author" content="Tavera, José, José, Saucedo">
        <meta http-equiv="refresh" content="3600">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">
        <title>Encuesta de satisfacción</title>
        <link rel="stylesheet" href="../css/style1.css">
    </head>

<body>
<div class="wrapper2">
    
    <form action="RegSatis.php" method="REQUEST">
        <ul>
            <li>
        <h2>ENCUESTA DE SATISFACCIÓN</h2>
        <br>
        <h3>Al contestar la siguiente encuesta nos ayudará a mejorar como empresa y brindar un mejor servicio.</h3>
        <br>
            <p for="q1">1. ¿Recomendaría Connection Point a algún conocido?</p>     
            <li>
        <label for="nin">Si</label>
        <input type="radio" name="p1" id="nin" value="Ninguna" required minlength ="1"><br/>
        <label for="poc">No</label>
        <input type="radio" name="p1" id="poc" value="Poca"><br/>
        
            </li>
        <br>
            <p for="q2">2. En comparación con otras empresas de infraestructura de red, el servicio de Connection Point es: </p>
            <li>
        <label for="peor">Buena</label>
        <input type="radio" name="p2" id="peor" value="Peor" required minlength ="1"><br/>
        <label for="igual">Regular</label>
        <input type="radio" name="p2" id="igual" value="Igual"><br/>
        <label for="mejor">Mala</label>
        <input type="radio" name="p2" id="radio" value="Mejor"><br/>
            </li>
        <br>
            <p for="q3">3. Al momento de llevar a cabo el desarrollo de una infraestructura de red, ¿Qué aspecto consideras más importante?</p>     
            <li>
        <label for="calidad">La calidad de los materiales</label>
        <input type="radio" name="p3" id="calidad" value="Calidad" required minlength ="1"><br/>
        <label for="precio">El precio de los materiales</label>
        <input type="radio" name="p3" id="precio" value="Precio"><br/>
        <label for="estetico">Que los componentes sean estéticos</label>
        <input type="radio" name="p3" id="estetico" value="Estetico"><br/>
            </li>
        <br>
            <p for="q4">4. Su experiencia con Connection Point fue:</p>     
            <li>
        <label for="mala">Mala</label>
        <input type="radio" name="p4" id="mala" value="Mala" required minlength ="1"><br/>
        <label for="regular">Regular</label>
        <input type="radio" name="p4" id="precio" value="Regular"><br/>
        <label for="estetico">Buena</label>
        <input type="radio" name="p4" id="estetico" value="Estetico"><br/>
            </li>
        <br>    
            <p for="q5">5. ¿Connection Point ha cumplido sus expectativas?</p>     
            <li>
        <label for="si">Si</label>
        <input type="radio" name="p5" id="si" value="Si" required minlength ="1"><br/>
        <label for="no">No</label>
        <input type="radio" name="p5" id="no" value="No"><br/>
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