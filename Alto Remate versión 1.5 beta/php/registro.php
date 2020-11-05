<?php
if(isset($_POST['registrate'])){
    $conexion = -"localhost","root","20202020","compras");
    if($conexion){
        echo "Conexion Correcta";
    }else{
        echo "error";
        }     
    
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$registrate = $_POST['registrate'];

}
?>