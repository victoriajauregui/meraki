<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACTO</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     
     <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&family=Quicksand:wght@600&family=Raleway:wght@300&family=Roboto+Slab:wght@100&family=Timmana&display=swap" rel="stylesheet">
  
     <link rel="stylesheet" href="estilos.css">

</head>

<body>
<section id= "formulario">
			<div class="mb-5"></div>
        <div class= form>

            <div class= contenido>

            
<?php

  if (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))
   {$email = $_REQUEST['email']; }
     

$nombre = $_REQUEST ['nombre'];
$email= $_REQUEST ['email'];
$consulta= $_REQUEST['consulta'];


$destino= 'merakicreativegroup@gmail.com';
$asunto= 'consultasitio';
$cuerpomensaje = " <H2> Mensaje sitio</H2> <p> Nuevo mensaje de: </p><p>". $nombre ."</p><p> Email:". $email. "</p><p> Consulta". $consulta."</p>";

//Cabeceras
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
// Cabeceras adicionales
$cabeceras .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";


$envio=mail($destino,$asunto,$cuerpomensaje,$cabeceras);
echo $cuerpomensaje;



if($envio === true) {
    echo "<h2>Gracias ".$nombre." por contacarnos </h2>";
}else{
    echo "<p>hubo un error en el envio, por favor escribinos a <a href='mailto:".$destino."'>".$destino."</a>";
}

?>
<!-- cierra php -->



            </div>

    </div>

</section>
        
        <br>
        

    <footer class=' footer container-fluid bg-info text-white p-2' col>
        <p class="text-center" >&copy; 2020 - derechos reservados Meraki Ceative Group</p>
    </footer>
	
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>