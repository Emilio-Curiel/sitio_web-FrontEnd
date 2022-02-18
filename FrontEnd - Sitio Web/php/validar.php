<?php
include('conexion.php');
$usuario=$_POST['user'];
$contraseña=$_POST['pass'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost:3306","root","","pagina_emilio");

$consulta="SELECT*FROM usuarios where user='$usuario' and pass='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("error.php");

}
mysqli_free_result($resultado);
mysqli_close($conexion);