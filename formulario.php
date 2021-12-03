<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Solicitud de Empleo</title>
        <link rel="stylesheet" type="text/css" href="estilo/formulario2.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        
    </head>
    <body>
    <header>
             <h1>MEYAH</h1>
               <center>
                   <nav>
                   <label for="check" class="checkbtn">
                       <i class="fas fa-bars"></i>
                   </label>
                   <ul>
                   <nav class="menu">
                   <li><a href="inicio.php">Inicio</a></li>
                   <li><a href="acercade.php">Acerca De Nosotros</a></li>
                   <li><a href="contacto.php">Contacto</a></li>
                   <li><a href="formulario.php">Solicitar Empleo</a></li>
                   </nav>
                   </ul>
         </center>
         </header><br><br><br>
         <section class="form-formulario">
         <center>
        <h2>SOLICITUD DE EMPLEO</h2>

        <form action="validar.php" method="POST">
        <div class="form__text">   
            <h4>Nombre:<br/>
            <input type="text" name="nombre" placeholder="Nombre(s)" ><br/></p>
            <h4>Apellido Paterno:<br/>
            <input type="text" name="apellidopa" placeholder="Apellido Paterno"><br/></p>
            <h4>Apellido Materno:<br/>
            <input type="text" name="apellidoma" placeholder="Apellido Materno"><br/></p>
            <h4>Correo Electronico:<br/>
            <input type="text" name="correo" placeholder="Correo Electronico"><br/></p>
            <h4>Numero de Telefono:<br/>
            <input type="text" name="telefono" placeholder="Numero de Telefono"><br/></p>
</div>    
        <h4>Sexo:</label><br/><br/>
        <label>
            <input type="radio" name="sexo" value="masculino"> Masculino
            <input type="radio" name="sexo" value="femenino"> Femenino
        </label><br/><br/><br/>
            <h4>Empresa a la que quieres solicitar el empleo:</h4><br/><br/>
            <div class="custom-select" style="width:200px;">
            <select name="menu"><br/>
			    <option value="pepsi" echo>Pepsi</option>
			    <option value="cocacola">Coca Cola</option>
			    <option value="subway">Subway</option>
                <option value="dominospizza">Dominos Pizza</option>
            </select></div><br/><br/>
            <h4>¿Por que quieres el empleo?</label><br/><br/>
            <textarea name="textarea" rows="10" cols="50"></textarea><br/>

            <input type="submit" src="formulario.php" name="enviar" value="Enviar">
            <input type= "reset" name="limpiar" value="Limpiar">
            </center>
           </section>
            </div>
        </form> 
        </body>
</html>
 