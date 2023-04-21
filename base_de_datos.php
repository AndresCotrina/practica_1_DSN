<?php

$contraseña = "u05QR0zv9cxDJdfCn5ug";
$usuario = "postgres";
$nombreBaseDeDatos = "railway";
$rutaServidor = "postgresql://postgres:u05QR0zv9cxDJdfCn5ug@containers-us-west-7.railway.app:6399/railway";
$puerto = "6399";

try{
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos",$usuario,$contraseña);
    $base_de_datos -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (Exception $e){
    echo 'Ocurrio un error con la base de datos: ' . $e->getMessage();
}
?>