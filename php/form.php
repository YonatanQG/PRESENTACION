<?php 
$nombre = $_POST ["nombre"];
$correo = $_POST ["correo"];
$mensaje = $_POST ["mensaje"];

$destinatario = "quirogayoni@hotmail.com";
$asunto = "de mi pagina web";

$carta = "de $nombre \u";
$carta .="correo: $correo \u";
$carta .="mensaje: $mensaje ";

mail($destinatario, $asunto, $carta);


echo" <script> alert("enviado")</script>";
echo"<script>setTimeout (\"location.href='index.html'\",1000)</script>;"
?>