<?php
session_start();
require_once "../modelos/Usuario.php";
$usuario=new Usuario();

$nombre=$_POST['nombres'];
$tipo_documento=$_POST['tipo_documento'];
$num_documento=$_POST['num_documento'];
$email=$_POST['email'];
$login=$_POST['username'];
$clave=$_POST['password'];

 $rspta=$usuario->insertarUsuario($nombre,$tipo_documento,$num_documento,$email,$login,$clave);
 echo $rspta ? "Usuario Registrado" : "Usuario no se pudo registrar";    