<?php
 $destino= "omar.gdz18@gmail.com"
 $nombre= $_POST["nombre"];
 $correo= $_POST["correo"]
 $telefono= $_POST["telefono"]
 $mensaje= $_POST["mensaje"]
 $contenido = "Nombre: ".$nombre . "\nCorreo: ".$correo. "\nTelefono : ".$telefono. "Mensaje: ".$mensaje;

 mail($destino,"Contacto",$contenido);
 header("Location:gracias.html");
?>